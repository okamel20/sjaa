<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'author_id', 'month_name_ar', 'month_name_en', 'year', 'title_ar', 'title_en', 'content_ar', 'content_en', 'img', 'active','page_num'
    ];

    
}
