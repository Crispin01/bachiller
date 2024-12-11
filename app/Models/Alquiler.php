<?php

namespace App\Models;
use App\Models\Inquilino;


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

    public function inquilinos() {
        return $this->belongsToMany(Inquilino::class, 'relacion_inquilino_alquilers', 'id_alquiler' , 'id_inquilino');
    }
}
