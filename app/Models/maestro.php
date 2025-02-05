<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
//use Illluminate\Database\Eloquent\Factories\HasFactory;


class maestro extends Model
{   
    use SoftDeletes;

    //
    protected $table = 'maestros';
    protected $fillable = [
        'nombre',
        'apellido',
        'matricula',
        'email',
        'telefono',
    ];
}
