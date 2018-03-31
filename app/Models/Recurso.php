<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    public $table = 'recurso';

    public $fillable = [
        'id',
        'idActividadAsoc',
        'recurso'
    ];
}
