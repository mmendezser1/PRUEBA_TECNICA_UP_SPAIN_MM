<?php

namespace src\InventaryShop\Product\Domain;

use src\InventaryShop\Product\Domain\ValueObjects\ProductDescription;
use src\InventaryShop\Product\Domain\ValueObjects\ProductName;
use src\InventaryShop\Product\Domain\ValueObjects\ProductPrice;
use src\InventaryShop\Product\Domain\ValueObjects\ProductStock;

final class Product
{
    private $name;
    private $description;
    private $price;
    private $stock;

    public function __construct(
        ProductName $name,
        ProductDescription $description,
        ProductPrice $price,
        ProductStock $stock,
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function name(): ProductName
    {
        return $this->name;
    }

    public function description(): ProductDescription
    {
        return $this->description;
    }

    public function price(): ProductPrice
    {
        return $this->price;
    }

    public function stock(): ProductStock
    {
        return $this->stock;
    }

    public static function create(
        ProductName $name,
        ProductDescription $description,
        ProductPrice $price,
        ProductStock $stock,
    ) {
        $product = new self($name, $description, $price, $stock);

        return $product;
    }
}
