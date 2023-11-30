<?php

namespace Src\InventaryShop\Product\Domain\ValueObjects;

use InvalidArgumentException;

final class ProductPrice
{
    private $value;

    public function __construct(float $price)
    {
        $this->validate($price);
        $this->value = $price;
    }

    private function validate($stock)
    {

        if (!is_float($stock) || $stock < 0) {
            throw new InvalidArgumentException("The price must be of decimal type and greater than 0.");
        }

    }

    public function value()
    {
        return $this->value;
    }

}
