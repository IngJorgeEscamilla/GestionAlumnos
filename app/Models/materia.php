<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function Laravel\Prompts\select;

class materia extends Model
{
    //
    use SoftDeletes;
    
    protected $table = "materias";

    protected $fillable = [
        'nomMateria',
        'clave',
        'horas',
    ];

    //Relacion muchos a muchos con el modelo alumno
    public function alumnos()
    {
        return $this->HasMany(alumno::class);
    }
}
