<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_conductor', 'apellido', 'dni', 'direccion', 'sexo',
    ];
}


 