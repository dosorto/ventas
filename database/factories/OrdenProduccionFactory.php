<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrdenProduccion;

class OrdenProduccionFactory extends Factory
{
    protected $model = OrdenProduccion::class;

    public function definition()
    {
        return [
            'unidades_id' => $this->faker->numberBetween(1, 10), // 
            'cantidad' => $this->faker->randomFloat(2, 1, 100),
            'cantidad_solicitada' => $this->faker->randomFloat(2, 1, 100),
            'estado' => $this->faker->randomElement(['pendiente', 'en_proceso', 'finalizado']),
            'fecha_horario_inicio' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'fecha_horario_final' => $this->faker->dateTimeBetween('now', '+1 month'),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'precio_total' => $this->faker->randomFloat(2, 100, 10000),
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_by' => null,
        ];
    }
}
