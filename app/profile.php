<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'id','short_name','email','address','phone_number','birth_date',
        'whatsapp_link','facebook_link','instagram_link','github_link',
        'another_link','freelancer_link','image','user_id'
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
