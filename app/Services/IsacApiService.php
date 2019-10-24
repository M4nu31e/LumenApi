<?php

namespace App\Services;

use App\Services\Checks\fraudCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

//ToDo abstract
class IsacApiService

{
    public $customer_uid;
    protected $request;
    protected $customer_number;
    protected $customer_number_raw;
    protected $payload;

    /**
     * FraudProtectionService constructor.
     * @param Request $request
     */
    public function __construct(
        Request $request
    )
    {
        $this->request = $request;

        $this->customer_context = null;
        $this->customer_number = null;
        $this->customer_number_raw = null;
        $this->customer_uid = null;
        $this->keyword = null;

        $payload = $this->request->json()->all();
        $this->payload = $payload;

        if ($this->payload &&
            is_array($this->payload) &&
            array_key_exists('keyword', $this->payload)) {
            $this->keyword = $this->payload['keyword'];
        }

        if (!$request->header('X-Domainrobot-Owner-User')) {
            Log::info('Customer header not present');
        } else {
            $sUser = $request->header('X-Domainrobot-Owner-User');
            $oUser = json_decode(base64_decode($sUser), true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $this->customer_context = $oUser['context'];
                $this->customer_number_raw = trim($oUser['user']);
                $this->customer_uid = $oUser['id'];
            } else {
                Log::error('Error decoding user data');
            }
        }

    }

    public function checkAccount()
    {

        Log::info("starting fraud check: " . json_encode($this->request->all()));

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

        $fraudChecks = new fraudCheck();

        try {
            return $fraudChecks->checkAccount($account, $order, $client_ip);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return false;
        }
    }

    private function getHttpHeaderValue($value)
    {
        if (is_array($value)) {
            return end($value);
        } else {
            return $value;
        }
    }
}
