<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{
    //
    use Notifiable;

    protected $guard = 'client';
    protected $fillable = [
        'name', 'lastname','email','password', 'phone','location',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
