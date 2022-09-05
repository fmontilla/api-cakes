<?php

namespace App\Providers\Request;

use App\Repositories\Request\RequestRepository;
use App\Repositories\Request\RequestRepositoryContract;
use Illuminate\Support\ServiceProvider;

class RequestRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;

     /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestRepositoryContract::class, RequestRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function provides()
    {
        return [RequestRepositoryContract::class];
    }
}
