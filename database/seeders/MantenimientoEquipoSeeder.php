<?php

namespace Database\Seeders;
use App\Models\MantenimientoEquipo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MantenimientoEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          MantenimientoEquipo::factory()->count(10)->create();
    }
}
