<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    public $table = 'maquina';

    public $fillable = [
        'id',
        'idArea',
        'idModelo',
        'nombre',
        'descripcion',
        'codigo',
        'imgFichaTec',
        'fechaIniOpera',
        'codigoQr'
    ];
}
