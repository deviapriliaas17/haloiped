<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = 'homepages';
    protected $fillable = [
        'section_1_title','section_1_header','section_1_button_1','section_1_link_1'
        ,'section_1_button_2','section_1_link_2','description','keyphrase','title',
        'section_1_image','section_2_title','section_2_header','section_2_small_title','section_2_image',
        'section_3_title','section_3_header','section_3_text_1','section_3_number_1',
        'section_3_text_2','section_3_number_2','section_3_text_3','section_3_number_3',
        'section_3_text_4','section_3_number_4','section_4_title','section_4_header',
        'section_5_title','section_5_header','section_5_image',
    ];
    public $timestamps = false;
}
