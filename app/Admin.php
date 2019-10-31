<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    //The authentication Guard for an Admin
    protected $guard='admin';
    protected  $fillable=[
        'email','password',
    ];
    protected $hidden=[
        'password','remember_token',
    ];
}
