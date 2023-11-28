<?php

namespace src\InventaryShop\Product\Domain\ValueObjects;

final class ProductDescription
{
    private $value;

    public function __construct(string $description)
    {
        $this->value = $description;
    }

    public function value()
    {
        return $this->value;
    }
}
