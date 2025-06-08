<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Persona;
use App\Models\Paise;
use App\Models\Municipio;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\persona>
 */
class PersonaFactory extends Factory
{
    protected $model = \App\Models\Persona::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $municipioId = Municipio::inRandomOrder()->first()->id ?? null;
        $paisId = Paise::inRandomOrder()->first()->id ?? null;

        // Si no se encuentran IDs, lanzar una excepción
        if (is_null($municipioId)) {
            throw new \Exception('No hay municipios en la base de datos. Asegúrate de ejecutar MunicipioSeeder primero.');
        }
        if (is_null($paisId)) {
            throw new \Exception('No hay países en la base de datos. Asegúrate de ejecutar PaisSeeder primero.');
        }

        $sexo = $this->faker->randomElement(['MASCULINO', 'FEMENINO']);
        $primerNombre = ($sexo === 'MASCULINO') ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $segundoNombre = ($sexo === 'MASCULINO') ? $this->faker->optional()->firstNameMale() : $this->faker->optional()->firstNameFemale();

        return [
            'primer_nombre' => $primerNombre,
            'segundo_nombre' => $segundoNombre,
            'primer_apellido' => $this->faker->lastName(),
            'segundo_apellido' => $this->faker->optional()->lastName(),
            'dni' => $this->faker->unique()->numerify('#############'), // DNI de 13 dígitos para Honduras
            'direccion' => $this->faker->address(),
            'municipio_id' => $municipioId,
            'telefono' => $this->faker->phoneNumber(),
            'sexo' => $sexo,
            'fecha_nacimiento' => $this->faker->date('Y-m-d', '2005-01-01'), // Fecha de nacimiento (hasta 2005 para que sean mayores de edad)
            'pais_id' => $paisId,
            'fotografia' => 'storage/fotos/placeholder_' . $this->faker->randomNumber(3) . '.jpg', // Ruta de ejemplo
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
