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
            'category_id' => function () {
                return Category::inRandomOrder()->first()->id;
            },
            'thumbnail' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(10, 100),
            'price' => $this->faker->randomFloat(2, 20, 100),
            'status' => 'published',
            'sku' => $this->faker->bothify('????-####-####'),
            'slug' => $this->faker->slug(8),
            'discount' => json_encode(['value' => $this->faker->numberBetween(1, 3), 'percentage' => $this->faker->numberBetween(1, 100)]),
            'variantions' => json_encode([
                ['product_option' => 'size', 'product_option_value' => 's'],
                ['product_option' => 'size', 'product_option_value' => 'xl'],
                ['product_option' => 'size', 'product_option_value' => 'm'],
                ['product_option' => 'color', 'product_option_value' => 'pink'],
                ['product_option' => 'color', 'product_option_value' => 'pink'],
                ['product_option' => 'color', 'product_option_value' => 'green']
            ])

        ];
    }
}
