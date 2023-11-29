<?php

namespace src\InventaryShop\Product\Application;

use src\InventaryShop\Product\Domain\Contracts\ProductRepositoryContract;
use src\InventaryShop\Product\Domain\ValueObjects\ProductId;

final class GetProductUseCase
{
    private $repository;

    public function __construct(ProductRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $productId)
    {
        $id = new ProductId($productId);

        $product = $this->repository->find($id);

        return $product;
    }
}
