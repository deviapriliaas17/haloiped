<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobtype extends Model
{
    protected $fillable = [
        'name','description','icon','position'
    ];
    public $timestamps = false;
}
