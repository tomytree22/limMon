<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPuesto extends Model
{
    public $table = 'cat_puesto';

    public $fillable = [
        'id',
        'puesto'
    ];
}
