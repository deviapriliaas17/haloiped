<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class template extends Model
{
    protected $table='templates';
    protected $hidden=['id'];
    protected $appends=['key'];
    protected $fillable=[
        'name','id'
    ];


    public function getKeyAttribute()
    {
        $id = encrypt($this->id);
        return $id;
    }

    
}
