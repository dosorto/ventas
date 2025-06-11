<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analisis_Calidad>
 */
class AnalisisCalidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'muestra_id' => rand(1, 10),
            'tipo_analisis_id' => rand(1, 10),
            'valor' => $this->faker->randomFloat(2, 1, 10),
            'observaciones' => $this->faker->sentence(),
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_by' => null,
        ];
    }
}
