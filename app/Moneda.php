<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table='monedas';
    protected $primaryKey = 'id';
    protected $fillable =  array('valor', 'pais', 'year', 'tipo');
}
