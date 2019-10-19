<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = [
         'img', 'title_ar', 'title_en', 'content_ar', 'active','content_en'
    ];

    
}
