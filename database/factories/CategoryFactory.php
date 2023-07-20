<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            // 'slug' => $this->faker->slug(3),
            'thumbnail' => $this->faker->imageUrl(),
            'description'=> $this->faker->text(100),
            'status' => 'published',
        ];
    }
}