<?php

namespace App\Services\Checks;

use App\FraudprotectionCheck;
use Illuminate\Support\Facades\Log;


class fraudCheck
{

    function getChecks()
    {
        return FraudprotectionCheck::query()
            ->where('active', '=', 1)
            ->get();
    }


    function processNegativePoints($negativePoints)
    {

        if ($negativePoints >= config('services.fraudprotection.low_risk.min') && $negativePoints <= config('services.fraudprotection.low_risk.max')) {
            return "low_risk";
        } else {
            if ($negativePoints >= config('services.fraudprotection.medium_risk.min') && $negativePoints <= config('services.fraudprotection.medium_risk.max')) {
                return "medium_risk";
            } else {
                if ($negativePoints >= config('services.fraudprotection.high_risk.min')) {
                    return "high_risk";
                } else {
                    return "unchecked";
                }
            }
        }
    }

    function checkAccount($account, $order, $clientIp)
    {

        $account = is_array($account) ? ((object)$account) : (is_object($account) ? $account : null);
        if (empty($account) && empty($account->created)) {
            return false;
        }
        $order = is_array($order) ? ((object)$order) : (is_object($order) ? $order : null);

        $account->client_ip = $clientIp;
        $account->order = $order;

        $checks = $this->getChecks();

        $checkSummary = [];
        $pointsSum = 0;

        foreach ($checks as $fraudCheck) {

            try {
                $className = "App\Services\Checks\\" . $fraudCheck->evaluation_class;

                if (class_exists($className)) {
                    $currentCheck = new $className();

                    /** @var iFraudCheck $currentCheck **/
                    $match = $currentCheck->evaluate($account);

                    $check = new \stdClass();
                    $check->name = $fraudCheck->name;
                    $check->description = $fraudCheck->description;
                    $check->result = $match->negative;
                    $check->comment = (empty($match->comment) ? $fraudCheck->description : $match->comment);
                    $check->points = $match->negative ? $fraudCheck->negative_points + $match->additionalPoints : 0;
                    $checkSummary[] = $check;

                    if ($match->negative) {
                        $pointsSum += $fraudCheck->negative_points + $match->additionalPoints;
                    }

                } else {
                    Log::error("Error executing class " . $className . " - Class not found");
                }
            } catch (\Exception $e) {
                Log::error("Executing fraudcheck " . $fraudCheck->evaluation_class . " failed with exception " . $e->getMessage());
            }

        }

        // Getting the fraudcheck status
        $accountFraudStatus = $this->processNegativePoints($pointsSum);

        $accountFraudResult = new \stdClass();
        $accountFraudResult->fraudprotection_score = $pointsSum;
        $accountFraudResult->fraudprotection_result = $accountFraudStatus;
        $accountFraudResult->fraudprotection_result_data = $checkSummary;
        $accountFraudResult->fraudprotection_manual_override = "unchanged";

        return $accountFraudResult;
    }
}
