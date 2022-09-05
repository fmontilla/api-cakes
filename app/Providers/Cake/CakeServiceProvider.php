<?php

namespace App\Providers\Cake;

use App\Services\Cake\CakeService;
use App\Services\Cake\CakeServiceContract;
use Illuminate\Support\ServiceProvider;

class CakeServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CakeServiceContract::class, CakeService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [CakeServiceContract::class];
    }
}
