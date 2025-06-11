<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 

class TipoOrdenCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define solo los tipos de órdenes de compra específicos que necesitas.
        $tiposOrden = [
            'Equipo Maquinaria',
            'Insumos',
            'Materia Prima',
        ];

        $dataToInsert = [];
        $now = Carbon::now();
        $createdBy = 1; // Puedes ajustar este ID si tienes un usuario específico para la siembra.

        // Prepara los datos para la inserción masiva.
        foreach ($tiposOrden as $nombreTipo) {
            $dataToInsert[] = [
                'nombre'     => $nombreTipo,
                'created_at' => $now,
                'updated_at' => $now,
                'created_by' => $createdBy,
                'updated_by' => $createdBy,
                'deleted_at' => null, // Asegúrate de que el campo para SoftDeletes sea nulo al crear.
                'deleted_by' => null,
            ];
        }

        // Inserta los datos en la tabla 'tipo_orden_compras'.
        // Usamos insertOrIgnore() para evitar errores si los registros ya existen
        // y la columna 'nombre' tiene una restricción UNIQUE.
        DB::table('tipo_orden_compras')->insertOrIgnore($dataToInsert);
    }
}
