<?php

namespace Database\Factories;

use App\Models\Country;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */


class CountryFactory extends Factory
{

    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {

        return [
            'country_code' => $this->faker->unique->countryISOAlpha3(),
            'name' => $this->faker->country(),
            'states' => json_encode(['state' => $this->faker->state(), 'city' => $this->faker->city()])
        ];
    }
}