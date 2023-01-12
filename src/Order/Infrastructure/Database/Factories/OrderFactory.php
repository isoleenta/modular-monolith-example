<?php

namespace Monolith\Order\Infrastructure\Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Monolith\Order\Domain\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    public function __construct($count = null, ?Collection $states = null, ?Collection $has = null, ?Collection $for = null, ?Collection $afterMaking = null, ?Collection $afterCreating = null, $connection = null, ?Collection $recycle = null)
    {
        parent::__construct($count, $states, $has, $for, $afterMaking, $afterCreating, $connection, $recycle);
        $this->model = Order::class;
    }

    public function definition()
    {
        return [
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'total' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
