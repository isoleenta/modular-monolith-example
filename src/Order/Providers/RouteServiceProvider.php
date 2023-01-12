<?php

namespace Monolith\Order\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

//use Monolith\Order\Application\Http\Middleware\SomeMiddleware;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('order-api')
                ->group(base_path('src/Order/routes.php'));
        });
//        $this->app['router']->aliasMiddleware('do-something', SomeMiddleware::class);
    }
}
