<?php

namespace App\Services\Checks;

use App\FraudprotectionNegativeValue;

class ipLocationFraudCheck implements iFraudCheck
{

    public function evaluate($data): fraudCheckResult
    {

        $result = new fraudCheckResult();
        $result->negative = false;

        // Checking if the ip country in the blacklist
        if (!empty($data->order->ip_country_code)) {

            $ipCountryCheck = FraudprotectionNegativeValue::query()
                ->where('type', '=', 'ip_country_code')
                ->whereRaw('UPPER(value) like ?', [strtoupper($data->order->ip_country_code)])
                ->get();

            if ($ipCountryCheck->count() > 0) {
                $ipCountryCheck = $ipCountryCheck->first();
                $result->negative = true;
                $result->comment .= $ipCountryCheck->comment;
                $result->additionalPoints = $ipCountryCheck->additional_negative_points;
            }
        }

        return $result;

    }

}
