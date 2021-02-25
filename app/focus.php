<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class focus extends Model
{
    protected $table='focus';

    protected $fillable = [
        'name','description','icon','position','id'
    ];

    public $timestamps = false;
}
