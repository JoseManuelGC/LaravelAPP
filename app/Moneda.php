<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table='monedas';
    protected $fillable =  array('valor', 'pais', 'year', 'tipo');
    protected $hidden = ['created_at','updated_at'];
}
