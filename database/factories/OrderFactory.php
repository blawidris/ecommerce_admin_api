<?php

namespace Database\Factories;

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
            'order_code' => $this->faker->numerify('ord-####'),
            'user_id' => User::factory(),
            'payment_id' => Payment::factory(),
            'shipping_id' => Shipping::factory(),
            'total_price' => $this->faker->randomFloat(2, 20, 45),

            'status' => 'shipped',
            'updated_by'=> User::factory()
        ];
    }
}