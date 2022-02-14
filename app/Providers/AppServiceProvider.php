<?php

namespace App\Providers;

use App\Repositories\Api\ApiPlacetopay;
use App\Repositories\Api\ApiRepository;
use App\Repositories\EloquentOrder;
use App\Repositories\OrderRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(OrderRepository::class, EloquentOrder::class);
        $this->app->singleton(ApiRepository::class, ApiPlacetopay::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
