<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = fake()->unique()->word();
        return [
            'name' => $name,
            'price' => fake()->randomFloat(2, 1, 100),
            'description' => fake()->text(30),
            'stock' => fake()->numberBetween(1, 100),
            'slug' => Str::slug($name),
        ];
    }
}
