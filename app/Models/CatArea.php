<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatArea extends Model
{
    public $table = 'cat_area';

    public $fillable = [
        'id',
        'idSucursal',
        'nombre',
        'descripcion',
        'croquis'
    ];
}
