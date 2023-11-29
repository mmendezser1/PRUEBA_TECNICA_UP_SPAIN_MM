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

    private function validate(int $id)
    {
        $options = array(
            'options' => array(
                'min_range' => 1,
            ),
        );

        if (!filter_var($id, FILTER_VALIDATE_INT, $options)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $id)
            );
        }
    }

    public function value()
    {
        return $this->value;
    }

}
