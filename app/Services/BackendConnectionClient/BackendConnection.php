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
        $this->api_app_key = '99f9d75a-863e-44e0-b96b-f75b16ac89e5';
        $this->api_dev_key = '377f276e-8646-4d0a-bb31-10c75a27608b';

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

            if (!$this->serviceExists($wsType)) {
                Log::error("*** Calling Engine Service not found");
                return false;
            }

            $response = $this->sendRequest($data, $timeout);
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
