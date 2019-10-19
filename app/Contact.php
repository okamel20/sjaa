<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'contact_subject_id', 'name', 'email', 'phone', 'msg', 'active'
    ];

    
}
