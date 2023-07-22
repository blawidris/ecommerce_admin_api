<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerAddresses>
 */
class CustomerAddressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id'=>function(){
                return Customers::inRandomOrder()->first()->id;
            },
            'address1' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zipcode' => $this->faker->postcode(),
            'country_code' => function () {
                return Country::inRandomOrder()->first()->code;
            },
        ];
    }
}