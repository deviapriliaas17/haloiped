<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = 'home_pages';
    protected $fillable = [
        'section_1_title','section_1_header','section_1_button_1','section_1_link_1'
        ,'section_1_button_2','section_1_link_2','description','keyphrase','title'
    ];
    public $timestamps = false;
}
