<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'name', 'email', 'password','phonenumber','userid'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
