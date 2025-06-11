<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\unidades_medida;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $unidadDeMedidaId = unidades_medida::inRandomOrder()->first()->id;


        if (is_null($unidadDeMedidaId)) {

            throw new \Exception("No hay unidades de medida en la base de datos para asignar a los productos. Asegúrate de ejecutar UnidadDeMedidaSeeder primero.");
        }

        // Generar un nombre de producto aleatorio y único
        $nombreProducto = $this->faker->unique()->words(3, true); // 3 palabras, como string

        return [
            // Clave foránea: asigna un ID de unidad de medida existente
            'unidad_de_medida_id' => $unidadDeMedidaId,
            
            // Campos de texto para el producto
            'nombre'            => ucfirst($nombreProducto), // Primera letra en mayúscula
            'descripcion'       => $this->faker->paragraph(3), // Párrafo de 3 oraciones
            'descripcion_corta' => $this->faker->sentence(8),  // Frase de 8 palabras
            'sku'               => $this->faker->unique()->ean13(), // Código de producto único (EAN-13)
            'codigo'            => $this->faker->unique()->bothify('PROD-#####-???'), // Código personalizado
            'color'             => $this->faker->safeColorName(), // Nombre de color seguro

            // Campos de auditoría
            'created_at' => now(), 
            'updated_at' => now(), 
            'created_by' => 1,     // ID del usuario por defecto
            'updated_by' => 1,     // ID del usuario por defecto
            'deleted_by' => null,  // Por defecto, no eliminado
            // 'deleted_at' se maneja automáticamente con SoftDeletes si no se define.
        ];
    }
}
