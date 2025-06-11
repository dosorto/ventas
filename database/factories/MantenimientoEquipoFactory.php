<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mantenimiento_equipo>
 */
class MantenimientoEquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_equipo' => $this->faker->word(),
            'fecha_mantenimiento' => $this->faker->date(),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
