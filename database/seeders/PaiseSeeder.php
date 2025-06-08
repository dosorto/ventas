<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paise;

class PaiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        Paise::factory()->create([
            'nombre_pais' => 'Honduras',
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Paise::factory()->count(9)->create();
    }
}
