<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

abstract class IsacApiService
{
    public $customer_uid;
    protected $request;
    protected $customer_number;
    protected $customer_number_raw;
    protected $payload;

    /**
     * IsacApiService constructor.
     * @param Request $request
     */
    public function __construct(
        Request $request
    ) {
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

    private function getHttpHeaderValue($value)
    {
        if (is_array($value)) {
            return end($value);
        } else {
            return $value;
        }
    }
}
