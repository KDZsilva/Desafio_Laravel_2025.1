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
    public function definition(): array
    {
        return [
            'name' => fake()->words(4, true),
            'subcategory_id' => random_int(1,10),
            'thumbnail' => fake()->imageUrl(),
            'user_id' => random_int(1,10),
            'preco' => 1,
            'desconto' => 1,
            'quantd_vendidas' => 0,
        ];
    }
}
