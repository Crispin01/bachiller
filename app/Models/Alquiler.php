<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres';
    protected $primaryKey = 'id_alquiler';
    protected $fillable = [
        'nombre_inquilino',
        'nombre_cuarto',
        'fecha_inicio',
        'fecha_fin',
    ];
}
