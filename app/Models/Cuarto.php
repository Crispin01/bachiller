<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuarto extends Model
{
    protected $table = 'cuartos';
    protected $primaryKey = 'id_cuarto';
    protected $fillable = [
        'numero_cuarto',
        'detalles_cuarto',
        'precio',
        'estado',
    ];
}
