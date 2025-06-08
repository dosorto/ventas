<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class persona extends Model
{
    /** @use HasFactory<\Database\Factories\PersonaFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'personas';

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'dni',
        'direccion',
        'municipio_id',
        'telefono',
        'sexo',
        'fecha_nacimiento',
        'pais_id',
        'fotografia', // Campo para la ruta de la fotografía
        'created_by',
        'updated_by',
    ];

    /**
     * Define la relación: una persona pertenece a un municipio.
     */
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    /**
     * Define la relación: una persona pertenece a un país.
     */
    public function pais()
    {
        return $this->belongsTo(Paise::class);
    }
}
