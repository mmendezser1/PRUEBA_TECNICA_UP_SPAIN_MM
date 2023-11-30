<?php

namespace Src\InventaryShop\Product\Domain\ValueObjects;

use InvalidArgumentException;

final class ProductId
{
    private $value;

    public function __construct(int $id)
    {
        $this->validate($id);
        $this->value = $id;
    }

    private function validate($stock)
    {
        if ($stock < 1) {
            throw new InvalidArgumentException("The id must be  greater than 1.");
        }

    }

    public function value()
    {
        return $this->value;
    }

}
