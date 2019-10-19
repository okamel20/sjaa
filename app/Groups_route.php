<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups_route extends Model
{
    protected $table = 'groups_routes';
    protected $fillable = [
        'group_id', 'route'
    ];

    
}
