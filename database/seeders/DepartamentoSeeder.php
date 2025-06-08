<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento; 
use App\Models\Paise;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Encontrar el ID de Honduras
        $honduras = Paise::where('nombre_pais', 'Honduras')->first();

        // *** LÍNEA DE DEPURACIÓN CRÍTICA ***
        if (is_null($honduras)) {
            $this->command->error('Error: ¡No se encontró el país "Honduras"!');
            return; // Detiene la ejecución si Honduras no se encuentra
        } else {
            $this->command->info('País "Honduras" encontrado con ID: ' . $honduras->id);
        }

        // 2. Lista de departamentos de Honduras en orden alfabético
        $departamentosHonduras = [
            'Atlántida', 'Choluteca', 'Colón', 'Comayagua', 'Copán',
            'Cortés', 'El Paraíso', 'Francisco Morazán', 'Gracias a Dios',
            'Intibucá', 'Islas de la Bahía', 'La Paz', 'Lempira',
            'Ocotepeque', 'Olancho', 'Santa Bárbara', 'Valle', 'Yoro',
        ];

        // 3. Insertar los departamentos
        foreach ($departamentosHonduras as $nombreDepartamento) {
            Departamento::firstOrCreate(
                [
                    'nombre_departamento' => $nombreDepartamento,
                    'pais_id' => $honduras->id,
                ],
                [
                    'created_by' => 1,
                    'updated_by' => 1,
                ]
            );
        }

        $this->command->info('Departamentos de Honduras ingresados');
    }
}