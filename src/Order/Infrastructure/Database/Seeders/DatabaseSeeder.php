<?php

namespace Monolith\Order\Infrastructure\Database\Seeders;

use Illuminate\Database\Seeder;
use Monolith\Order\Infrastructure\Database\Factories\OrderFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        OrderFactory::new()->count(10)->create();
    }
}
