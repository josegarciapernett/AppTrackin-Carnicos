<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_alimento', 'temp_max', 'temp_min',
    ];
}
