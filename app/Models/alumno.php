<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //
    use SoftDeletes;

    protected $table = "alumnos";

    protected $fillable = [
        'nombre',
        'apellido',
        'matricula',
        'semestre',
        'email',
        'telefono',
    ];
}
