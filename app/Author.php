<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = [
        'name_ar', 'name_en', 'active'
    ];

    public function news()
    {
        return $this->hasMany('App\New','auther_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->news()->delete();
        });
    }

    
}
