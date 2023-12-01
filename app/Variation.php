<?php
namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $table = 'variations';
    public $timestamps = false;

    protected $fillable = [
        'producto_id', 'name', 'price', 'stock', 'url_image',
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
