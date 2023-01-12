<?php

namespace Monolith\Authorization\Providers;

use Illuminate\Support\ServiceProvider;

class AuthorizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__.'/../routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Infrastructure/Database/Migrations');
    }

    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
