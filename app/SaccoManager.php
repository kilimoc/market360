<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SaccoManager extends Authenticatable
{
use Notifiable;
protected  $guard='saccomanager';
protected $fillable=['first_name','last_name','phone','id_number','email','password'];
protected  $hidden=['password','remember_token'];
}
