<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paise;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\paise>
 */
class PaiseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paise::class; 

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_pais' => $this->faker->unique()->country(),
            'created_by' => 1,
            'updated_by' => 1, 
        ];
    }
}
