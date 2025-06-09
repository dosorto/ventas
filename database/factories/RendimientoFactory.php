<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rendimiento>
 */
class RendimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Rendimiento::class;
    public function definition(): array
    {
        return [
            'orden_produccion_id' => \App\Models\OrdenProduccion::factory(),
            'cantidad_mp' => $this->faker->randomFloat(2, 1, 1000),
            'precio_mp' => $this->faker->randomFloat(2, 10, 1000),
            'precio_otros_mp' => $this->faker->randomFloat(2, 1, 500),
            'margen_ganancia' => \App\Models\Parametro::factory(),
            'created_by' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->randomNumber(),
            'deleted_by' => null,
        ];
    }
}
