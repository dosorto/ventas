<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrdenProduccion;

class OrdenProduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrdenProduccion::factory()->count(10)->create();
    }
}
