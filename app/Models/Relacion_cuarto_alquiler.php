<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relacion_cuarto_alquiler extends Model
{
    protected $table = 'relacion_cuarto_alquilers';
    protected $primaryKey = 'id_evento';
    protected $fillable = [
        'id_cuarto',
        'id_alquiler',
    ];
}
