<?php

namespace App\Providers;

use App\Services\ApiAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(ApiAccountService::class, function ($app) {
            return new ApiAccountService($this->request);
        });

    }
}
