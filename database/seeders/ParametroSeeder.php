<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parametro;

class ParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Parametro::factory()->count(10)->create();
    }
}
