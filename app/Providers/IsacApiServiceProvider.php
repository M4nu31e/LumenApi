<?php

namespace App\Providers;

use App\Http\Controllers\ApiAccountController;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Services\IsacApiService;

class IsacApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Request $request
     * @return void
     */
    public function boot(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ApiAccountController::class, function ($app) {
            return new ApiAccountController($this->request);
        });


    }
}
