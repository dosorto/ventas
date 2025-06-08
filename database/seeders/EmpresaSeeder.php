<?php

namespace Database\Seeders;

use Database\Factories\EmpresaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa; 
use App\Models\Municipio;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        if (Municipio::count() === 0) {
            $this->command->warn('No hay municipios disponibles. Asegúrate de ejecutar');
        }
        EmpresaFactory::new()->count(10)->create();
    }
}
