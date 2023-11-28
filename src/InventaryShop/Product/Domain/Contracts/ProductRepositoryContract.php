<?php

namespace src\InventaryShop\Product\Domain\Contracts;

use src\InventaryShop\Product\Domain\Product;
use src\InventaryShop\Product\Domain\ValueObjects\ProductId;

interface ProductRepositoryContract
{
    public function find(ProductId $id);

    public function save(Product $product);
}
