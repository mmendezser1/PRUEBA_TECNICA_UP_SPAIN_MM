<?php

namespace Src\InventaryShop\Product\Domain\Contracts;

use Src\InventaryShop\Product\Domain\Product;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductId;

interface ProductRepositoryContract
{
    public function find(ProductId $id);

    public function save(Product $product);

    public function all();
}
