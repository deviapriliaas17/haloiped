<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogcategory extends Model
{
    protected $table = 'blogcategories';
    protected $fillable  = [
        'name'
    ];
    public $timestamps = false;
}
