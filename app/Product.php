<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
   
    protected $fillable = [
        'title', 'price','image', 'product_url', 'category_id', 'brand_id'
    ];
}
