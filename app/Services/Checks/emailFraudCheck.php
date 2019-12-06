<?php

namespace App\Services\Checks;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use App\FraudprotectionNegativeValue;
use Illuminate\Support\Facades\Log;

class emailFraudCheck implements iFraudCheck
{

    public function evaluate($data): fraudCheckResult
    {


        $result = new fraudCheckResult();
        $result->negative = true;

        // Checking the E-Mail Address

        // Splitting the given email address into local and global part
        $emailParts = explode("@", $data->email);
        $localPart = strtolower($emailParts[0]);
        $globalPart = strtolower($emailParts[1]);

        $suspiciousEmail = true;

        // Checking if the local part contains the first name
        if (strpos($localPart, strtolower($data->first_name)) !== false) {
            Log::info("Found first name " . $data->first_name . " in email address " . $data->email);
            $suspiciousEmail = false;
        }

        // Checking if the local part contains the last name
        if (strpos($localPart, strtolower($data->last_name)) !== false) {
            Log::info("Found last name " . $data->last_name . " in email address " . $data->email);
            $suspiciousEmail = false;
        }

        // Splitting the company name in its parts
        $companyParts = explode(" ", $data->organization);

        foreach ($companyParts as $part) {
            if (strlen($part) > 3) {
                // Checking if the part is included in the global part
                if (strpos($globalPart, strtolower($part)) !== false) {
                    Log::info("Found part " . $part . " of the company name " . $data->organization . " in the global part of the email aaddress " . $data->email);
                    $suspiciousEmail = false;
                }
            }
        }

        if (!$suspiciousEmail) {
            // If the email address contains the first name, last name or company name it is not negative
            $result->negative = false;
        } else {
            $result->comment .= "Verdächtige E-Mail Adresse ";
        }


        /*
         * Checking it the e-mail address or the e-mail provider is in the negative list
         */

        // Checking the whole e-mail address
        $emailCheck = FraudprotectionNegativeValue::query()
            ->where('type', '=', 'email')
            ->whereRaw('UPPER(value) like ?', [strtoupper($data->email)])
            ->get();
        if ($emailCheck->count() > 0) {
            $emailCheck = $emailCheck->first();
            $result->negative = true;
            $result->additionalPoints += $emailCheck->additional_negative_points;
            $result->comment .= $emailCheck->comment . " ";
        }

        // Checking if the hostname is in the blocked list
        $blockedHost = FraudprotectionNegativeValue::query()
            ->where('type', '=', 'blocked_host')
            ->whereRaw('UPPER(value) like ?', ["%" . strtoupper($globalPart) . "%"])
            ->get();

        if ($blockedHost->count() > 0) {
            $blockedHost = $blockedHost->first();
            $result->negative = true;
            $result->additionalPoints += $blockedHost->additional_negative_points;
            $result->comment .= $blockedHost->comment . " ";
        }

        // Checking if it is a freemail address
        $freemailProvider = FraudprotectionNegativeValue::query()
            ->where('type', '=', 'freemail_provider')
            ->whereRaw('UPPER(value) like ?', ["%" . strtoupper($globalPart) . "%"])
            ->get();


        if ($freemailProvider->count() > 0) {
            $freemailProvider = $freemailProvider->first();
            $result->negative = true;
            $result->additionalPoints += $freemailProvider->additional_negative_points;
            $result->comment .= $freemailProvider->comment . " ";
        }

        return $result;
    }
}
