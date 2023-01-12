<?php

namespace Monolith\Order\Providers;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__.'/../routes.php');
//        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'order');
        $this->loadMigrationsFrom(__DIR__.'/../Infrastructure/Database/Migrations');
    }

    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
