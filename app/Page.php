<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'text_start_ar', 'text_start_en', 'active','end_text_ar','end_text_en','title_ar','title_en'
    ];

    public function contents()
    {
        return $this->hasMany('App\Page_content','page_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->contents()->delete();
        });
    }

    
}
