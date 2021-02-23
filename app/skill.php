<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id','name','description','image','rate'
    ];
}
