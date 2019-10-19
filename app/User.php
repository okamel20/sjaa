<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use DB;
class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $fillable = [
         'name', 'email', 'code', 'type', 'active','password','remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token','device_token',
    ];


}
