<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title','content','image','published_at','slug','user_id','category_id'
    ];
    public function category()
    {
        return $this->belongsTo('App\blogcategory','category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
