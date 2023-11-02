<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' => fake()->randomElement([100000, 150000, 200000, 250000, 300000]),
            'color' => fake()->colorName(),
            'brand' => fake()->company(),
            'size' => fake()->numberBetween(39, 44),
            'amount' => fake()->numberBetween(1, 100),
            'image_path' => fake()->numberBetween(1, 10).'.png',
        ];
    }
}
