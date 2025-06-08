<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Empresa;


class departementoempleado extends Model
{
    /** @use HasFactory<\Database\Factories\DepartementoempleadoFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'departemento_empleados'; 

    protected $fillable = [
        'nombre_departamento_empleado',
        'descripcion',
        'empresa_id',
        'created_by',
        'updated_by',
    ];


    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
