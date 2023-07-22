<?php

namespace Database\Factories;

use App\Models\Customers;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_by' => function () {
                return Customers::inRandomOrder()->first()->id;
            },
            'amount' => $this->faker->randomFloat(2, 20, 40),
            'status' => 'paid',
            'payment_type' => 'card',
            'card_number' => $this->faker->creditCardNumber(),
            'card_type' => $this->faker->creditCardType(),
            'card_exp' => $this->faker->creditCardExpirationDateString(true, 'm-Y'),
            'card_cvv' => $this->faker->numberBetween(300, 600),
            'reference_code' => $this->faker->numerify('##########')
        ];
    }
}