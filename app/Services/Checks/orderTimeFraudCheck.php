<?php

namespace App\Services\Checks;

const FRAUDPROTECTION_BUSINESS_DAYS = [1, 2, 3, 4, 5];
class orderTimeFraudCheck implements iFraudCheck
{
    public function evaluate($data): fraudCheckResult
    {
        $result = new fraudCheckResult();
        $result->negative = false;

        // Checking if we have information to the order
        if (is_object($data->order) && !empty($data->order->created)) {
            // Getting the hour from the order created-date
            $dateValue = \DateTime::createFromFormat("Y-m-d H:i:s", $data->order->created);
        } else {
            // No order information available => Using the account creation date
            $dateValue = \DateTime::createFromFormat("Y-m-d H:i:s", $data->created);
        }

        // Getting the hour
        $hour = $dateValue->format('H');

        // Getting the weekday
        $weekday = $dateValue->format('w');

        // Checking the business days
        if (!in_array($weekday, FRAUDPROTECTION_BUSINESS_DAYS)) {
            $result->comment = "No business day";
            $result->negative = true;
        }

        // Checking the business hours
        if ($hour >= config('services.fraudprotection.businesshours.end') || $hour <= config('services.fraudprotection.businesshours.begin')) {
            $result->comment = "Outside of business hours";
            $result->negative = true;
        }

        return $result;
    }
}
