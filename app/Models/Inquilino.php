<?php

namespace App\Models;

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
}
