<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:52
 */

namespace App\Services;

use App\Http\Requests\AccountCreateRequest;
use App\Services\BackendConnectionClient\BackendConnection as backend;
use Illuminate\Support\Facades\Log;
use PHPUnit\Runner\Exception;

class ApiAccountService extends IsacApiService
{
    public function create(AccountCreateRequest $request)
    {
        try {
            Log::info("creating account: " . json_encode($request->all()));
            $backendConnection = new backend();
            return $backendConnection->callBackend('WS_CREATE_GUEST_ACCOUNT', $request->all());
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
        }
        return false;
    }
}
