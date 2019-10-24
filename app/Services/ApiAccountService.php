<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:52
 */

namespace App\Services;

use Illuminate\Support\Facades\Log;

class ApiAccountService extends IsacApiService
{

    public function createAccount()
    {

        Log::info("creating account: " . json_encode($this->request->all()));

        $input = $this->request->all();

        $account = null;
        $order = null;
        $client_ip = null;
        if (!empty($input['account'])) {
            $account = $input['account'];
        }
        if (!empty($input['order'])) {
            $order = $input['order'];
        }
        if (!empty($input['order'])) {
            $client_ip = $input['client_ip'];
        }

        /*        try {

                } catch (\Exception $exception) {
                    Log::error($exception->getMessage());
                    return false;
                }*/
    }
}
