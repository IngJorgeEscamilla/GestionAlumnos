<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    //
    use SoftDeletes;
    protected $table = "calificaciones";

    protected $fillable = [
        'calificaciónes',
    ];
}
