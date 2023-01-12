<?php

namespace Monolith\Order\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Monolith\Order\Application\Policies\OrderPolicy;
use Monolith\Order\Domain\Models\Order;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Order::class => OrderPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
