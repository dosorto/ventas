<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parametro>
 */
class ParametroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clave' => $this->faker->unique()->word(),
            'valor' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph(),
            'fecha_creacion' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'ultima_actualizacion' => $this->faker->dateTimeBetween('-1 months', 'now'),
            'created_by' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->randomNumber(),
            'deleted_by' => null,
        ];
    }
}
