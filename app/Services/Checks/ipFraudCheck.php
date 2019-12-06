<?php


namespace App\Services\Checks;

use App\FraudprotectionNegativeValue;
use App\Services\common\ipHelper;

class ipFraudCheck implements iFraudCheck
{

    public function evaluate($data): fraudCheckResult
    {
        $result = new fraudCheckResult();
        $result->negative = false;


        // Checking if the ip is in the blacklist
        if (!empty($data->client_ip)) {

            $ipCheck = FraudprotectionNegativeValue::query()
                ->where('value', '=', $data->client_ip)
                ->where('type', '=', 'ip')
                ->get();

            if ($ipCheck->count() > 0) {
                $ipCheck = $ipCheck->first();
                $result->comment .= $ipCheck->comment;
                $result->negative = true;
                $result->additionalPoints = $ipCheck->additional_negative_points;
            }
        }

        // Checking if the ip is in the blacklisted networks
        $ipHelper = new ipHelper();

        // Getting the blockes networks
        $ipNets = FraudprotectionNegativeValue::query()
            ->where('type', '=', 'network')
            ->get();

        foreach ($ipNets as $ipNet) {
            if ($ipHelper->ip_in_range($data->client_ip, $ipNet->value)) {
                $result->comment .= $ipNet->comment;
                $result->negative = true;
                $result->additionalPoints = $ipNet->additional_negative_points;
            }
        }

        return $result;

    }
}
