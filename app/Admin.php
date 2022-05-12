<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;



class Admin extends Authenticatable implements MustVerifyEmail
{

    //
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'lastname', 'email','phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember-token',
    ];
}
