<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function grupo()
    {
        return $this->belongsTo('App\Models\alumno');
    }
    
}
