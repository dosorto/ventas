<?php

namespace Database\Seeders;
use App\Models\AnalisisCalidad;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnalisisCalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          AnalisisCalidad::factory()->count(10)->create();
    }
}
