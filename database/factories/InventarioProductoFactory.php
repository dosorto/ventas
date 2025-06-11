<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;
use App\Models\InventarioProducto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inventario_producto>
 */
class InventarioProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
    public function definition(): array
    {

        $productoId = Producto::inRandomOrder()->first()->id ?? null;

        // Validar que se encontró un ID de producto para evitar errores de clave foránea
        if (is_null($productoId)) {
            throw new \Exception("No se encontraron productos en la base de datos para asignar al inventario. Asegúrate de ejecutar ProductoSeeder primero.");
        }

        return [
            // Clave foránea: asigna un ID de producto existente
            'producto_id' => $productoId,
            
            // Cantidad inicial del producto en inventario
            'cantidad'    => $this->faker->randomFloat(2, 50, 5000), 
                                                                  

            // Campos de auditoría
            'created_at' => now(), 
            'updated_at' => now(), 
            'created_by' => 1,     
            'updated_by' => 1,     
            'deleted_by' => null,  
            
        ];
    }
}
