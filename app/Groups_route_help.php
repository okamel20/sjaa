<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups_route_help extends Model
{
    protected $table = 'groups_route_helps';
    protected $fillable = [
        'group_id', 'route'
    ];

    
}
