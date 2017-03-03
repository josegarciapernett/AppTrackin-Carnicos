<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporta_Alimento extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha', 'Vehiculo_id', 'Empresa_id',
    ];
}
