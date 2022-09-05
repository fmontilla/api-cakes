<?php

namespace App\Providers\Cake;

use App\Repositories\Cake\CakeRepository;
use App\Repositories\Cake\CakeRepositoryContract;
use Illuminate\Support\ServiceProvider;

class CakeRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;

     /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CakeRepositoryContract::class, CakeRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function provides()
    {
        return [CakeRepositoryContract::class];
    }
}
