<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => fake()->unique()->words(2, true),
            'product_code' => fake()->iban,
            'category' => fake()->word,
            'weight' => fake()->numberBetween(50, 9999),
            'price' => fake()->numberBetween(250, 100000),
            'status' => fake()->numberBetween(1, 3),
            'created_at' => fake()->dateTimeBetween('-1 week', '+5 days'),
        ];
    }
}
