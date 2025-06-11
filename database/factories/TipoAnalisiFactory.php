<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tipo_analisi>
 */
class TipoAnalisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_analisis' => $this->faker->word(),
            'unidad_id' => rand(1, 5), // asegúrate de tener unidades creadas
            'rango_min' => 1.00,
            'rango_max' => 10.00,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
