<?php

namespace Database\Factories;
use App\Models\TipoEmpleado;    

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipo_empleado>
 */
class TipoEmpleadoFactory extends Factory
{
    protected $model = TipoEmpleado::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
    {
        return [
            'nombre_tipo' => $this->faker->unique()->randomElement([
                'Administrador', 'Gerente', 'Operativo', 'Técnico', 'Ventas',
                'Recursos Humanos', 'Contabilidad', 'Soporte TI', 'Atención al Cliente',
                'Supervisor', 'Asistente', 'Director', 'Analista', 'Coordinador',
                'Especialista'
            ]) . ' ' . $this->faker->jobTitle(), 

            'descripcion' => $this->faker->paragraph(), // Un párrafo de texto para la descripción
            'created_by' => 1, 
            'updated_by' => 1,
        ];
    }
}
