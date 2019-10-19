<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page_content extends Model
{
    protected $table = 'page_contents';
    protected $fillable = [
        'page_id', 'title_ar', 'title_en', 'content_ar', 'content_en', 'active'
    ];

    
}
