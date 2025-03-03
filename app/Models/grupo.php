<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class grupo extends Model
{
    //
    use SoftDeletes;
    protected $table = 'grupos';

    protected $fillable = [
        'nomGrup',
    ];

    public function alumno()
    {
        return $this->hasMany('App\Models\alumno');
    }

}
