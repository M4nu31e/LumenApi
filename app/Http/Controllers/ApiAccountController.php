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
     * @return Response|ResponseFactory
     */
    public function checkAccount(
        ApiAccountService $accountService
    )
    {
        $results = $accountService->checkAccount();
        if ($results) {
            return $this->returnStatus(
                200,
                [
                    'msg' => 'Successfully checked account fraud status',
                    'type' => 'check',
                    'data' => $results,
                ]
            );
        } else {
            return $this->returnStatus(
                400,
                ['msg' => 'Could check account fraud status']
            );
        }
    }

}
