<?php

namespace src\InventaryShop\Product\Domain\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Type\Decimal;

final class ProductPrice
{
    private $value;

    public function __construct(Decimal $price)
    {
        $this->validate($price);
        $this->value = $price;
    }

    private function validate(Decimal $price)
    {
        $options = array(
            'options' => array(
                'min_range' => 0,
            ),
        );

        if (!filter_var($price, FILTER_VALIDATE_INT, $options)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $price)
            );
        }
    }

    public function value()
    {
        return $this->value;
    }

}
