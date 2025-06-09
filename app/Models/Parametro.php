<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parametro extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'parametros';

    protected $fillable = [
        'clave',
        'valor',
        'descripcion',
        'fecha_creacion',
        'ultima_actualizacion',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $dates = [
        'fecha_creacion',
        'ultima_actualizacion',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
