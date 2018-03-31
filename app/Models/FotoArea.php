<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoArea extends Model
{
    public $table = 'foto_area';

    public $fillable = [
        'id',
        'idArea',
        'ruta'
    ];
}
