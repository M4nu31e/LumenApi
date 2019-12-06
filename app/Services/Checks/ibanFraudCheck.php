<?php

namespace App\Services\Checks;

use App\FraudprotectionNegativeValue;

class ibanFraudCheck implements iFraudCheck
{

    public function evaluate($data): fraudCheckResult
    {

        $result = new fraudCheckResult();
        $result->negative = false;

        // Checking if the iban is in the blacklist
        if (!empty($data->iban)) {

            $ibanHash = hash("sha256", $data->iban);
            $ibanCheck = FraudprotectionNegativeValue::query()
                ->where('value', '=', $ibanHash)
                ->where('type', '=', 'iban')
                ->get();

            if ($ibanCheck->count() > 0) {
                $ibanCheck = $ibanCheck->first();
                $result->negative = true;
                $result->comment .= $ibanCheck->comment;
                $result->additionalPoints = $ibanCheck->additional_negative_points;
            }
        }

        return $result;
    }
}
