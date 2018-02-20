<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table='coins';
    protected $fillable =  array('value', 'country', 'period', 'year', 'type');
    protected $hidden = ['created_at','updated_at'];
}
