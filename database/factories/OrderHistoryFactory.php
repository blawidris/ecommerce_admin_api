<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderHistory>
 */
class OrderHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => function(){
                return Order::inRandomOrder()->first()->id;
            },
            'comment' => $this->faker->text(20),
            'status' => $this->faker->numberBetween(0,5),
            'is_notify' => $this->faker->numberBetween(0,1)
        ];
    }
}