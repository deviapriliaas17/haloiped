<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioPage extends Model
{
    protected $fillable = [
        'section_1_title',
        'section_1_header',
        'section_1_description',
        'section_1_image',
        'section_2_title',
        'section_2_description',
        'keyphrase',
        'description',
        'title',
    ];

    public $timestamps = false;
}
