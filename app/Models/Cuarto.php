<?php

namespace App\Models;
use App\Models\Alquiler;

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
    public function alquileres() {
        return $this->belongsToMany(Alquiler::class, 'relacion_cuarto_alquilers', 'id_alquiler' , 'id_cuarto');
    }
}
