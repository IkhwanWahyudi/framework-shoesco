<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\account;

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
            'price' => fake()->randomElement([100000, 150000, 200000, 250000, 300000]),
            'color' => fake()->colorName(),
            'brand' => fake()->company(),
            'size' => fake()->numberBetween(39, 44),
            'amount' => fake()->numberBetween(1, 100),
            'account_id' => account::all()->random()->id,
        ];
    }
}
