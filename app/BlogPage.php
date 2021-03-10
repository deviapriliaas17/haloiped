<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    protected $fillable=[
        'section_1_header','section_1_title','section_1_description',
        'section_1_image','section_2_text','section_3_text','section_4_text','section_5_text',
    ];
    public $timestamps=false;
}
