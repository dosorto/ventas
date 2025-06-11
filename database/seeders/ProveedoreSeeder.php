<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedore; 
use App\Models\Municipio;
use App\Models\Empresa;   


class ProveedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proveedore::factory()->count(50)->create();
    }
}
