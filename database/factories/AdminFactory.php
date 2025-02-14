<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creator_id' => 1,
            'foto' => fake()->imageUrl(),
            'name' => fake()->name(),
            'data_de_nascimento' => fake()->dateTime(),
            'cpf' => fake()->cpf(),
            'telefone' => fake()->cellphoneNumber(),
            /* Criar email com domínio da empresa */
            'email' => fake()->unique()->adminEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'rua' => fake('pt_BR')->streetName(),
            'numero' => fake()->numberBetween(1,99999),
            'bairro' => fake()->name(),
            'cidade' => random_int(1,5570),
            'cep' => fake('pt_BR')->postcode(),
            'complemento' => fake('pt_BR')->secondaryAddress(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
