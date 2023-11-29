<?php

namespace Src\InventaryShop\Product\Domain\ValueObjects;

final class ProductStock
{
    private $value;

    public function __construct(string $stock)
    {
        $this->value = $stock;
    }

    public function value()
    {
        return $this->value;
    }

}
