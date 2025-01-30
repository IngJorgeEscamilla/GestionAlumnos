<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illluminate\Database\Eloquent\Factories\HasFactory;


class maestro extends Model
{
    //use HasFactory;

    //
    protected $table = 'maestros';
    protected $fillable = [
        'nombre',
        'matricula',
        'email',
        'telefono',
    ];
}
