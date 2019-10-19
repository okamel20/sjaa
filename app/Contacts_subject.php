<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts_subject extends Model
{
    protected $table = 'contacts_subjects';
    protected $fillable = [
        'title_ar', 'title_en', 'active'
    ];

    
}
