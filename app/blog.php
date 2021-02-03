<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title','content','image','published_at','slug','user_id','category_id'
    ];
}
