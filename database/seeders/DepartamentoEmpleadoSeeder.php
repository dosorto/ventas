<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DepartamentoEmpleado;
use App\Models\Empresa;
use Database\Factories\DepartamentoEmpleadoFactory;

class DepartamentoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        if (Empresa::count() === 0) {
            $this->command->error('No hay empresas en la base de datos. Por favor, asegúrate de que EmpresaSeeder se ejecute ANTES que DepartamentosEmpleadoSeeder.');
            return; 
        }

        DepartamentoEmpleadoFactory::new()->count(10)->create();

        $this->command->info('10 departamentos de empleados agregados!');
    }
}
