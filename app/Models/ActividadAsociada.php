<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadAsociada extends Model
{
    public $table = 'actividad_asociada';

    public $fillable = [
        'id',
        'idModelo',
        'tipo'
    ];
}
