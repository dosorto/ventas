<?php

namespace Database\Seeders;
use App\Models\TipoAnalisis;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAnalisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         TipoAnalisis::factory()->count(10)->create();
    }
}
