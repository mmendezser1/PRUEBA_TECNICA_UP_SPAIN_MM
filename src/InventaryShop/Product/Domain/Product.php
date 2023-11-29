<?php

namespace Src\InventaryShop\Product\Domain;

use Src\InventaryShop\Product\Domain\ValueObjects\ProductDescription;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductName;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductPrice;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductStock;

final class Product
{
    private $name;
    private $description;
    private $price;
    private $stock;

    public function __construct(ProductName $name, ProductDescription $description, ProductPrice $price, ProductStock $stock)
    {
        $this->name = $name->value();
        $this->description = $description->value();
        $this->price = $price->value();
        $this->stock = $stock->value();
    }

    public function name()
    {
        return $this->name;
    }

    public function description()
    {
        return $this->description;
    }

    public function price()
    {
        return $this->price;
    }

    public function stock()
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
