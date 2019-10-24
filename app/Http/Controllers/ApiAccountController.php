<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:48
 */

namespace App\Http\Controllers;

use App\Services\ApiAccountService;

class ApiAccountController extends IsacApiController
{
    /**
     * Check account against fraudulent behavior
     *
     * @param ApiAccountService $accountService
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function checkAccount(
        ApiAccountService $accountService
    ) {

        $results = $accountService->createAccount();
        if ($results) {
            return $this->returnStatus(
                200,
                [
                    'msg' => 'Successfully created account',
                    'type' => 'account',
                    'data' => $results,
                ]
            );
        } else {
            return $this->returnStatus(
                400,
                ['msg' => 'Could create account!']
            );
        }
    }
}
