<?php

namespace Src\InventaryShop\Product\Domain\ValueObjects;

final class ProductPrice
{
    private $value;

    public function __construct(string $price)
    {
        $this->value = $price;
    }

    public function value()
    {
        return $this->value;
    }

}
