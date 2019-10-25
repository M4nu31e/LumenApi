<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:48
 */

namespace App\Http\Controllers;

use App\Http\Requests\AccountCreateRequest;
use App\Services\ApiAccountService;

class ApiAccountController extends IsacApiController
{

    /**
     * Create isac account
     *
     * @OA\Post(
     *     path="/account/create",
     *     tags={"account"},
     *     summary="Create new account",
     *     operationId="createAccount",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     requestBody={"$ref": "#/components/requestBodies/Account"}
     * )
     *
     * @param ApiAccountService $accountService
     * @param AccountCreateRequest $request
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function create(
        ApiAccountService $accountService,
        AccountCreateRequest $request
    ) {

        $results = $accountService->create($request);
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
                ['msg' => 'Could not create account!']
            );
        }
    }
}
