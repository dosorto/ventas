<?php

namespace Database\Seeders;
use App\Models\Muestra;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuestraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Muestra::factory()->count(10)->create();
    }
}
