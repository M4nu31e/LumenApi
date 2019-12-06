<?php

namespace App\Services\Checks;


use App\FraudprotectionNegativeValue;

class orderItemFraudCheck implements iFraudCheck
{

    public function evaluate($data): fraudCheckResult
    {

        $result = new fraudCheckResult();
        $result->negative = false;

        if (is_object($data->order) && !empty($data->order->items)) {

            foreach ($data->order->items as $item) {

                // Checking if type token is blocked
                $orderIteanCheck = FraudprotectionNegativeValue::query()
                    ->where('type', '=', 'product')
                    ->where('value', '=', $item->type_token)
                    ->get();

                if (count($orderIteanCheck) > 0) {
                    $orderIteanCheck = $orderIteanCheck[0];
                    $result->negative = true;
                    $result->additionalPoints += $orderIteanCheck->additional_negative_points;
                    $result->comment .= $orderIteanCheck->comment;
                }

            }
        }

        return $result;

    }

}
