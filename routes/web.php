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

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Fraud check operations
$router->group(['prefix' => 'fraudprotection'], function () use ($router) {
    // Fraud Protection Service - check account against rules
    $router->post('/check', 'FraudProtectionController@checkAccount');

    // TODO - route to register all accounts with their ip address ( save only account's sha256 )
    // TODO - route to manually override fraud result

    // TODO - routes to manage rules and negative values / addresses
});
