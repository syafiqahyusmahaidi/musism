<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{ 
    public $table = 'profile';
   
    protected $fillable = [
        'username', 'email', 'password', 'gender', 
    ];
}
