<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    //
    protected $table = "materias"
    protected $fillable = [
        'nomMateria',
        'clave',
        'horas',
    ];
}
