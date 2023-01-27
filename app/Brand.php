<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $table = 'brand';
   
    protected $fillable = [
        'bname', 
    ];

    
}
