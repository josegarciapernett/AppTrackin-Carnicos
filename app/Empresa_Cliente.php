<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa_Cliente extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_empresa', 'nit',
    ];

}
