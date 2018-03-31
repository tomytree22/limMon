<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivMantenim extends Model
{
    public $table = 'activ_mantenim';

    public $fillable = [
        'id',
        'idMaquina',
        'idActividadAsoc',
        'fecha',
        'estatus',
        'evidencia',
        'calificacion'
    ];
}
