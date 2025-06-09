<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Precio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'precios';

    protected $fillable = [
        'rendimiento_id',
        'precio',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // Relaciones
    public function rendimiento()
    {
        return $this->belongsTo(Rendimiento::class, 'rendimiento_id');
    }
}
