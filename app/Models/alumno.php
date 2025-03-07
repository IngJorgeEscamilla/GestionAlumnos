<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'grupo_id', 
    ];

    /**
     * Get all of the comments for the alumno
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    //Relacion muchos a uno con el modelo grupo
    public function grupo(): HasOne
    {
        return $this->hasOne(grupo::class, 'id', 'grupo_id');
    }
    
}
