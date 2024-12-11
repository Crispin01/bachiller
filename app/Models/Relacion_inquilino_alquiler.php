<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relacion_inquilino_alquiler extends Model
{
    protected $table = 'relacion_inquilino_alquilers';
    protected $primaryKey = 'id_evento';
    protected $fillable = [
        'id_inquilino',
        'id_alquiler',
    ];
}
