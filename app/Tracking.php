<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Vehiculo_id', 'Alimento_id', 'fecha', 'latitud', 'longitud', 'temperature',

    ];
}
