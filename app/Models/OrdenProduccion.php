<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdenProduccion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orden_produccion';

    protected $fillable = [
        'unidades_id',
        'cantidad',
        'cantidad_solicitada',
        'estado',
        'fecha_horario_inicio',
        'fecha_horario_final',
        'precio',
        'precio_total',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
