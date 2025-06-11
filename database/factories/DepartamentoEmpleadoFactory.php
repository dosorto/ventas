<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;
use App\Models\DepartamentoEmpleado;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\departementoempleado>
 */
class DepartamentoEmpleadoFactory extends Factory
{
    protected $model = DepartamentoEmpleado::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $empresaId = Empresa::inRandomOrder()->first()->id ?? null;


        if (is_null($empresaId)) {
            throw new \Exception('No hay empresas en la base de datos. Asegúrate de ejecutar EmpresaSeeder primero.');
        }

        return [
            'nombre_departamento_empleado' => $this->faker->randomElement([
                'Recursos Humanos', 'Contabilidad', 'Ventas', 'Marketing', 'Operaciones',
                'Tecnología de la Información', 'Atención al Cliente', 'Logística',
                'Producción', 'Finanzas', 'Investigación y Desarrollo', 'Compras'
            ]),
            'descripcion' => $this->faker->paragraph(),
            'empresa_id' => $empresaId,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
