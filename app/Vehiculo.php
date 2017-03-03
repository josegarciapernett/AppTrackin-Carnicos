<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_vehiculo', 'modelo', 'placa', 'capacidad', 'Card_Movil_id',
    ];
}
