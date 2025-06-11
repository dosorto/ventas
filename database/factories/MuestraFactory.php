<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Muestra>
 */
class MuestraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_muestra' => $this->faker->word(),
            'cantidad' => $this->faker->randomFloat(2, 1, 10),
            'unidades_id' => rand(1, 5), // debes tener unidades creadas
            'temperatura' => $this->faker->randomFloat(2, 0, 40),
            'fecha_muestra' => $this->faker->date(),
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_by' => null,
        ];
    }
}
