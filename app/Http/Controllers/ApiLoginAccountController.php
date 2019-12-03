<?php
/**
 * Created by PhpStorm.
 * User: Manuel.Soellner
 * Date: 24.10.2019
 * Time: 14:48
 */

namespace App\Http\Controllers;

use App\Http\Requests\AccountLoginRequest;
use App\Services\ApiLoginAccountUserService;

class ApiLoginAccountController extends IsacApiController
{

    /**
     * Created by PhpStorm.
     * User: Manuel.Soellner
     * Date: 03.12.2019
     * Time: 11:01
     */
    /**
     * Login isac account
     *
     * @OA\Post(
     *     path="/account/login",
     *     tags={"Login"},
     *     summary="Login account",
     *     operationId="loginAccount",
     * @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     requestBody={"$ref": "#/components/requestBodies/Login"}
     * )
     *
     * @param  ApiLoginAccountUserService $loginService
     * @param  AccountLoginRequest $request
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function create(
        ApiLoginAccountUserService $loginService,
        AccountLoginRequest $request
    ) {

        $results = $loginService->create($request);

        if ($results) {
            return $this->returnStatus(
                200,
                [
                    'msg' => 'Successfull login',
                    'type' => 'account',
                    'data' => $results,
                ]
            );
        } else {
            return $this->returnStatus(
                400,
                ['msg' => 'Could not login account!']
            );
        }
    }
}
