<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card_Movil extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nro_tel', 'IMEI',
    ];
}
