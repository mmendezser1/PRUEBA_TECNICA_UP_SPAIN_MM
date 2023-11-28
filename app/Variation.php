<?php
namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $fillable = [
        'producto_id', 'name', 'price', 'stock', 'url_image',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
