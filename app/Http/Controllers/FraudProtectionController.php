<?php

namespace App\Http\Controllers;

use App\Services\IsacApiService;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class FraudProtectionController extends Controller
{

    /**
     * Check account against fraudulent behavior
     *
     * @param IsacApiService $fps
     * @return Response|ResponseFactory
     */
    public function checkAccount(
        IsacApiService $fps
    ) {
        $results = $fps->checkAccount();
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

    /**
     * Register account with it's ip and sha265
     *
     * @param IsacApiService $fps
     * @return Response|ResponseFactory
     */

    public function registerAccount(
        IsacApiService $fps
    ) {


    }


}
