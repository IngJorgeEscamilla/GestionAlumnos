<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //
    protected $table = "alumnos";

    protected $fillable = [
        'nombre',
        'matricula',
        'semestre',
        'email',
        'telefono',
    ];
}
