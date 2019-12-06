<?php

namespace App\Http\Controllers;

use App\Services\FraudProtectionService;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class FraudProtectionController extends Controller
{

    /**
     * Check account against fraudulent behavior
     *
     * @param FraudProtectionService $fps
     * @return Response|ResponseFactory
     */
    public function checkAccount(
        FraudProtectionService $fps
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
     * @param FraudProtectionService $fps
     * @return Response|ResponseFactory
     */

    public function registerAccount(
        FraudProtectionService $fps
    ) {


    }


}
