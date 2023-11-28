<?php

namespace App;

use App\Variation;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'stock',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'decimal',
        'stock' => 'integer',
    ];

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
