<?php

namespace App\Services\Checks;


use App\FraudprotectionRegisteredAccounts;

class multipleAccountRegistrationCheck implements iFraudCheck
{

    public function evaluate($data): fraudCheckResult
    {

        $result = new fraudCheckResult();
        $result->negative = false;

        if (!empty($data->order)) {
            unset($data->order);
        }

        $accountsRegistered = FraudprotectionRegisteredAccounts::query()
            ->where('registered_ip', '=', $data->client_ip)
            ->orWhere('account_hash', '=', hash("sha256", json_encode($data)))
            ->get();

        if ($accountsRegistered->count() > 1) {
            $result->negative = true;
        }

        return $result;
    }
}