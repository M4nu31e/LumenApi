<?php

namespace App\Services\BackendConnectionClient;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class BackendConnection extends BackendServiceEnum
{
    protected $url;
    protected $api_session_token = "";
    protected $product_key = "9607d798-4a73-11e5-9ec9-001a4a5e438b";
    protected $api_dev_key;
    protected $api_app_key;
    protected $cookies;

    /**
     * BackendConnection constructor.
     */
    public function __construct()
    {
        $this->api_app_key = '605c46de-a3aa-49a8-ad0b-25ebc46e629b';
        $this->api_dev_key = 'B0E5E674-63EA-4406-9677-1CDE72CA398E';

        //$this->cookies = session('api_cookies');

        if ($this->cookies == null) {
            $this->cookies = new CookieJar;
        }

        $this->url = env('BACKEND_URL');
    }

    /**
     * @param  $wsType
     * @param  $data
     * @param  $timeout
     * @return mixed
     * @throws
     */
    public function callBackend($wsType, $data, $timeout = 600)
    {

        try {
            Log::info("*** Calling: " . $wsType);
            $checkExisting = $this->serviceExists($wsType);
            $this->wsType = constant($wsType);

            /*$data["wsType"] = $this->wsType;
            $data["auth_sessionToken"] = $this->api_session_token;
            $data["auth_devKey"] = $this->api_dev_key;
            $data["auth_appKey"] = $this->api_app_key;*/

            if (!$checkExisting) {
                Log::error("*** Calling Engine Service not found");
                return false;
            }
            $request_data = ([
                "auth_sessionToken" => $this->api_session_token,
                "auth_devKey" => $this->api_dev_key,
                "auth_appKey" => $this->api_app_key,
                "wsType" => $this->wsType,
                "data" => json_encode(["data" => $data])
            ]);
            $response = $this->sendRequest($request_data, $timeout);
            Log::info("*** Response: " . json_encode($response));
            return $response;
        } catch (\Exception $exception) {
            Log::error("Error calling engine: " . $exception->getMessage());
            return false;
        }
    }

    /**
     * Calls the engine
     *
     * @param  $data
     * @param  int $timeout
     * @return bool|\stdClass
     * @throws
     */
    private function sendRequest(array $data, $timeout = 600)
    {

        try {
            $client = new Client(
                [
                    // Base URI is used with relative requests
                    'base_uri' => $this->url,
                    'verify' => false,
                    'timeout' => $timeout
                ]
            );

            $response = $client->request(
                'POST',
                "/",
                [
                    'form_params' => $data,
                    'cookies' => $this->cookies,
                ]
            );

            $answer = new \stdClass();
            $answer->body = $response->getBody();
            $answer->status = $response->getStatusCode();
            return $answer;
        } catch (BadRequestHttpException $exception) {
            Log::error("Error calling engine: " . $exception->getMessage());
            return false;
        }
    }
}
