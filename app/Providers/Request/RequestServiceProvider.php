<?php

namespace App\Providers\Request;

use App\Services\Request\RequestService;
use App\Services\Request\RequestServiceContract;
use Illuminate\Support\ServiceProvider;

class RequestServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestServiceContract::class, RequestService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [RequestServiceContract::class];
    }
}
