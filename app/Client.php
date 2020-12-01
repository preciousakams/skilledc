<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Client extends Authenticatable implements MustVerifyEmail
{
    //
    use Notifiable;

    protected $guard = 'client';
    protected $fillable = [
        'name', 'lastname','email','password', 'phone','location','clientImage'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
