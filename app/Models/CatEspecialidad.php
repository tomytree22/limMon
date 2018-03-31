<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEspecialidad extends Model
{
    public $table = 'cat_especialidad';

    public $fillable = [
        'id',
        'especialidad'
    ];
}
