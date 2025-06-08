<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona; 
use App\Models\Municipio;
use App\Models\Paise;


class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // --- 1. Verificar dependencias ---
        if (Municipio::count() === 0) {
            $this->command->error('No hay municipios en la base de datos. Asegúrate de que MunicipioSeeder se ejecute ANTES.');
            return;
        }
        if (Paise::count() === 0) {
            $this->command->error('No hay países en la base de datos. Asegúrate de que PaisSeeder se ejecute ANTES.');
            return;
        }

        // Genera 20 personas
        Persona::factory()->count(20)->create();

        $this->command->info('20 personas agregadas!');
    }
}
