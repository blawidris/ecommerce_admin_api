<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(100),
            'category_id' => Category::factory(),
            'thumbnail' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(10, 100),
            'price' => $this->faker->randomFloat(2, 20, 100),
            'status' => 'published',
            'sku' => $this->faker->bothify('????-####-####'),
            'slug' => $this->faker->slug(8),


        ];
    }
}