<?php

namespace src\InventaryShop\Product\Domain\ValueObjects;

final class ProductName
{
    private $value;

    public function __construct(string $name)
    {
        $this->value = $name;
    }

    public function value()
    {
        return $this->value;
    }
}
