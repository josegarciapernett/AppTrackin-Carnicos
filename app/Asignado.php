<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignado extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Vehiculo_id', 'Sensor_id', 
    ];
}
