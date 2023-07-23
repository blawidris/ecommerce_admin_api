<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Customers;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => function () {
                return Customers::inRandomOrder()->first()->id;
            },
            'address' =>  $this->faker->streetName(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'phone_number' => $this->faker->phoneNumber(),
            'zipcode' => $this->faker->postcode(),
            'country_code' => function () {
                return Country::inRandomOrder()->first()->code;
            },
            'order_id' => $this->faker->numberBetween(1,10),
            'shipping_method' => 'express',
            'status' => 'shipped',
            'track_code' => $this->faker->numerify('######')

        ];
    }
}