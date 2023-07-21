<?php

namespace Database\Factories;

use App\Models\Customers;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customers::factory(),
            'product_id' => function () {
                return Product::inRandomOrder()->first()->id;
            },
            'rate' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->text('30')
        ];
    }
}
