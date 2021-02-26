<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class focus extends Model
{
    protected $table='focus';

    protected $fillable = [
        'name','description','icon','position','id'
    ];
    protected $hidden=['id'];
    protected $appends=['key'];

    public function getKeyAttribute()
    {
        $id = encrypt($this->id);
        return $id;
    }

    public $timestamps = false;
}
