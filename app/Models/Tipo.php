<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipoFactory extends Factory
{
    protected $model = \App\Models\Tipo::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->word(),
            'created_by' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->randomNumber(),
            'deleted_by' => null,
        ];
    }
}
