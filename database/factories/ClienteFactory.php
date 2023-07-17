<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
//            'cpf' => $this->faker->cpf(),
            'cpf' => $this->faker->randomNumber(9, true) . str_pad($this->faker->randomNumber(2, true), 2, '0', STR_PAD_LEFT),
            'ativo' => $this->faker->boolean(),

        ];
    }
}
