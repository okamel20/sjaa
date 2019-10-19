<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups_help extends Model
{
    protected $table = 'groups_helps';
    protected $fillable = [
        'group_name_ar', 'group_name_en', 'active'
    ];

    public function gRoutes()
    {
        return $this->hasMany('App\Groups_route_help','group_id','id');
    }

    public function gUsers()
    {
        return $this->hasMany('App\Help','group_id','id');
    }

    protected static function boot() {
        parent::boot();
        static::deleting(function($year) {
            $year->gRoutes()->delete();
            $year->gUsers()->delete();
        });
    }

    
}
