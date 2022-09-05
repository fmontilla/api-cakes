<?php

namespace App\Providers\Client;

use App\Repositories\Client\ClientRepository;
use App\Repositories\Client\ClientRepositoryContract;
use Illuminate\Support\ServiceProvider;

class ClientRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;

     /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClientRepositoryContract::class, ClientRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function provides()
    {
        return [ClientRepositoryContract::class];
    }
}
