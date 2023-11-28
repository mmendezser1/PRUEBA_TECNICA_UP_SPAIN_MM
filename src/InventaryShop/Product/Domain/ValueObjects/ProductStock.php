<?php

namespace src\InventaryShop\Product\Domain\ValueObjects;

use InvalidArgumentException;

final class ProductStock
{
    private $value;

    public function __construct(int $stock)
    {
        $this->validate($stock);
        $this->value = $stock;
    }

    private function validate(int $stock)
    {
        $options = array(
            'options' => array(
                'min_range' => 0,
            ),
        );

        if (!filter_var($stock, FILTER_VALIDATE_INT, $options)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $stock)
            );
        }
    }

    public function value()
    {
        return $this->value;
    }

}
