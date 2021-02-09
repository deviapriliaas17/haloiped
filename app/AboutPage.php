<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $fillable=[
        'section_1_header','section_1_title','section_1_description',
        'section_1_image','section_2_title_1','section_2_desc_1','section_2_icon_1',
        'section_2_title_2','section_2_desc_2','section_2_icon_2',
        'section_2_title_3','section_2_desc_3','section_2_icon_3',
        'section_3_title','section_3_description','section_3_image',
        'title','description','keyphrase',
    ];

    public $timestamps=false;
}
