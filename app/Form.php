<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'userid',
    ];

    public function User()
    {
        return $this->hasOne('App\User', 'id', 'userid');
    }
}
