<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = [
        'id', 'lname', 'fname', 'address', 'phone', 'email', 'password',
    ];

    public function users() {
        return $this->hasMany('App\Accounts');
    }
}
