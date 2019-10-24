<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$API_VERSION = 'v2';

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Fraud check operations
$router->group(['prefix' => 'isac-api/' . $API_VERSION], function () use ($router) {
    // Fraud Protection Service - check account against rules
    $router->post('/check', 'IsacApiController@checkAccount');
});
