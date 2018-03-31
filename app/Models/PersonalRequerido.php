<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalRequerido extends Model
{
    public $table = 'personal_requerido';

    public $fillable = [
        'id',
        'idActividad',
        'idMaquina',
        'idUsuario',
        'funcion'
    ];
}
