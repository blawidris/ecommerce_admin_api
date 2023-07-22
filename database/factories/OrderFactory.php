<?php

namespace Database\Factories;

use App\Models\Customers;
use App\Models\Payment;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_code' => $this->faker->numerify('#######'),
            'customer_id' => function () {
                return Customers::inRandomOrder()->first()->id;
            },
            'payment_id' => function () {
                return Payment::inRandomOrder()->first()->id;
            },
            'shipping_id' => function () {
                return Shipping::inRandomOrder()->first()->id;
            },
            'total_price' => $this->faker->randomFloat(2, 20, 45),
            'updated_by' => User::factory()
        ];
    }
}
