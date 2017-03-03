<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducir extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Conductor_id', 'Vehiculo_id',
    ];
}
