<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Said_about extends Model
{
    protected $table = 'said_abouts';
    protected $fillable = [
          'name_ar', 'name_en', 'content_ar', 'content_en', 'img', 'active',
    ];

    
}
