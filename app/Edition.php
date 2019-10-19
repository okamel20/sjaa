<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $table = 'editions';
    protected $fillable = [
        'pdf_file', 'date', 'active','the_number_ar','the_number_en'
    ];

    
}
