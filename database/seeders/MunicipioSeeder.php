<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cholutecaDepartamento = Departamento::where('nombre_departamento', 'Choluteca')->first();

        if (is_null($cholutecaDepartamento)) {
            $this->command->error('Error: ¡No se encontró el departamento "Choluteca"!');
            $this->command->info('Departamentos existentes: ' . json_encode(Departamento::pluck('nombre_departamento')->toArray()));
            return; // Detiene la ejecución si el departamento no se encuentra
        } else {
            $this->command->info('Departamento "Choluteca" encontrado con ID: ' . $cholutecaDepartamento->id);
        }

        // 2. Lista de municipios de Choluteca en orden alfabético
        $municipiosCholuteca = [
            'Apacilagua',
            'Choluteca',
            'Concepción de María',
            'Duyure',
            'El Corpus',
            'El Triunfo',
            'Marcovia',
            'Morolica',
            'Namasigüe',
            'Orocuina',
            'Pespire',
            'San Antonio de Flores', 
            'San Isidro',
            'San José',
            'San Marcos de Colón',
            'Santa Ana de Yusguare',
        ];

        // 3. Insertar los municipios
        foreach ($municipiosCholuteca as $nombreMunicipio) {
            Municipio::firstOrCreate(
                [
                    'nombre_municipio' => $nombreMunicipio,
                    'departamento_id' => $cholutecaDepartamento->id,
                ],
                [
                    'created_by' => 1, // Asume un usuario con ID 1
                    'updated_by' => 1, // Asume un usuario con ID 1
                ]
            );
        }

        $this->command->info('Municipios de Choluteca seeded successfully!');
    }
}
