<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrdenCompra; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orden_compra>
 */
class OrdenCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'tipo_orden_compra_id' => $this->faker->numberBetween(1, 3),
            'proveedor_id' => $this->faker->numberBetween(1, 50),
            'empresa_id' => $this->faker->numberBetween(1, 10),
            'fecha_realizada' => $this->faker->date(),
            'created_by' => 1,
            'updated_by' => null,
            'deleted_by' => null,
        ];
    }
}
