<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    /** @use HasFactory<\Database\Factories\EmpresaFactory> */
    use HasFactory, SoftDeletes; // Usa SoftDeletes si lo tienes en tu migración

    protected $table = 'empresas'; // Asegúrate de que el modelo esté asociado a la tabla 'empresas'

    protected $fillable = [
        'nombre',
        'municipio_id',
        'direccion',
        'telefono',
        'rtn',
        'created_by',
        'updated_by',
    ];

    /**
     * Define la relación inversa: una empresa pertenece a un municipio.
     */
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
