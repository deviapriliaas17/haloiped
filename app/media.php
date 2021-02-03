<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $fillable= [
        'image','alt','description'
    ];
}
