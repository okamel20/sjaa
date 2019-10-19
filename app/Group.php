<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = [
        'group_name_ar', 'group_name_en', 'active'
    ];

    public function gRoutes()
    {
        return $this->hasMany('App\Groups_route','group_id','id');
    }

    public function gUsers()
    {
        return $this->hasMany('App\Admin','group_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->gRoutes()->delete();
            $year->gUsers()->delete();
        });
    }

    
}
