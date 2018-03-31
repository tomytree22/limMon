<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoSuc extends Model
{
    public $table = 'foto_suc';

    public $fillable = [
        'id',
        'idSucursal',
        'ruta'
    ];
}
