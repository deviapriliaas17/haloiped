<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class profile extends Model
{
    protected $fillable = [
        'id','short_name','email','address','phone_number','birth_date',
        'whatsapp_link','facebook_link','instagram_link','github_link',
        'another_link','freelancer_link','image','user_id'
    ];
    protected $hidden = ['id'];
    protected $appends=['key'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getKeyAttribute()
    {
        $id = encrypt($this->id);
        return $id;
    }
}
