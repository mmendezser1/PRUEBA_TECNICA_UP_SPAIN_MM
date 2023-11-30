<?php

namespace Src\InventaryShop\Product\Domain\ValueObjects;

use InvalidArgumentException;

final class ProductStock
{
    private $value;

    public function __construct(int $stock)
    {
        $this->validate($stock);
        $this->value = $stock;
    }

    private function validate($stock)
    {
        if (!is_int($stock) || $stock < 0) {
            throw new InvalidArgumentException("The stock must be of integer type and greater than 0.");
        }
    }
    public function value()
    {
        return $this->value;
    }

}
