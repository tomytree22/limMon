<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatModelo extends Model
{
    public $table = 'cat_modelo';

    public $fillable = [
        'id',
        'modelo'
    ];
}
