<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:52
 */

namespace App\Services;

use App\Http\Requests\AccountCreateRequest;
use Illuminate\Support\Facades\Log;

class ApiAccountService extends IsacApiService
{
    public function create(AccountCreateRequest $request)
    {
        Log::info("creating account: " . json_encode($request->all()));

        //TODO - calling backend connection

        return true;
    }
}
