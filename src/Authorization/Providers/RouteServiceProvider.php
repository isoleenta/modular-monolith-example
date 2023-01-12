<?php

namespace Monolith\Authorization\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('auth-api')
                ->namespace('Monolith\\Authorization\\Application\\Http\\Controllers')
                ->group(base_path('src/Authorization/routes.php'));
        });
    }
}
