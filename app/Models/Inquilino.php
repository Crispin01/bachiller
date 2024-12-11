<?php

namespace App\Models;
use App\Models\Alquiler;


use Illuminate\Database\Eloquent\Model;

class Inquilino extends Model
{
    protected $table = 'inquilinos';
    protected $primaryKey = 'id_inquilino';
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'dni',
    ];
    public function alquileres() {
        return $this->belongsToMany(Alquiler::class, 'relacion_inquilino_alquilers', 'id_alquiler' , 'id_inquilino');
    }
}
