<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEmpleado; // Asegúrate de que el nombre del modelo sea correcto
class TipoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoEmpleado::factory()->count(10)->create();
    }
}
