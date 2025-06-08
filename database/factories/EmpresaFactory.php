<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa; 
use App\Models\Municipio; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\empresa>
 */
class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $municipioId = Municipio::inRandomOrder()->first()->id ?? null;

        if (is_null ($municipioId)) {
            throw new \Exception('No hay municipios disponibles para asignar a la empresa');
        }

        return [
            'nombre' => $this->faker->company(), // Nombre de empresa aleatorio
            'municipio_id' => $municipioId,
            'direccion' => $this->faker->address(), // Dirección aleatoria
            'telefono' => $this->faker->phoneNumber(), // Teléfono aleatorio
            'rtn' => $this->faker->unique()->numerify('############'), // RTN de 12 dígitos aleatorios y únicos
            'created_by' => 1, 
            'updated_by' => 1, 
        ];
    }
}
