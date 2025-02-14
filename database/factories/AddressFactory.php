<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'bairro' => fake()->words(3, true),
         'cep' => fake()->postcode(),
         'cidade_id' => random_int(1,5570),
         'complemento' => fake()->word(),
         'numero' => random_int(1, 99999),
         'rua' => fake()->name(),
         'user_id' => random_int(1,10),
        ];
    }
}
