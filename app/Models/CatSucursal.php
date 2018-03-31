<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSucursal extends Model
{
    public $table = 'cat_sucursal';

    public $fillable = [
        'id',
        'nombre',
        'descripcion',
        'latitud',
        'longitud',
        'telefono'
    ];
}
