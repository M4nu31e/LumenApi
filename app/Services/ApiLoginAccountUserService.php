<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:52
 */

namespace App\Services;

use App\Http\Requests\AccountLoginRequest;
use App\Services\BackendConnectionClient\BackendConnection as backend;
use Illuminate\Support\Facades\Log;
use PHPUnit\Runner\Exception;

class ApiLoginAccountUserService extends IsacApiService
{
    public function create(AccountLoginRequest $request)
    {
        try {
            Log::info("creating login: " . json_encode($request->all()));
            $backendConnection = new backend();
            return $backendConnection->callBackend('WS_LOGIN_ACCOUNT_USER', $request->all());
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
        }
        return false;
    }
}
