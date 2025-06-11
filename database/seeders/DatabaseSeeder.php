<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Provider\ar_EG\Person;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'root',
            'email' => 'root@example.com',
        ]);
        $this->call([
            PaiseSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            TipoEmpleadoSeeder::class,
            EmpresaSeeder::class,
            DepartamentoEmpleadoSeeder::class,
            PersonaSeeder::class,
            OrdenProduccionSeeder::class,
            TipoSeeder::class,
            ParametroSeeder::class,
            RendimientoSeeder::class,
            PrecioSeeder::class,
            RolesAndPermissionsSeeder::class,
        ]);
        
    }
}
