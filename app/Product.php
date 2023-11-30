<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'price', 'stock',
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
    ];

}
