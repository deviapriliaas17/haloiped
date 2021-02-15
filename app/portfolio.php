<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $table = 'portfolios';
    protected $fillable = [
        'name','image','alt_image','description','date','link'
    ];
    public $timestamps = false;
}
