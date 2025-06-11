<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrdenCompraProducto; 
use App\Models\Producto;          
use App\Models\OrdenCompra;      

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orden_compra_producto>
 */
class OrdenCompraProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $productoId = Producto::inRandomOrder()->first()->id ?? null;

        
        $ordenCompraId = OrdenCompra::inRandomOrder()->first()->id ?? null;

        // Validar que se encontraron IDs para evitar errores de clave foránea
        if (is_null($productoId) || is_null($ordenCompraId)) {
            throw new \Exception("Asegúrate de que las tablas 'productos' y 'orden_compras' estén sembradas antes de ejecutar este seeder.");
        }

        return [
            // Claves foráneas
            'producto_id'   => $productoId,
            'orden_compra_id' => $ordenCompraId,
            
            // Cantidad del producto en la orden
            'cantidad'      => $this->faker->randomFloat(2, 1, 100), // Cantidad entre 1 y 100 con 2 decimales

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
