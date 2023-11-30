<?php

namespace Src\InventaryShop\Product\Application;

use Src\InventaryShop\Product\Domain\Contracts\ProductRepositoryContract;
use Src\InventaryShop\Product\Domain\Product;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductDescription;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductName;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductPrice;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductStock;

final class CreateProductUseCase
{

    private $repository;

    public function __construct(ProductRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $productName, string $productDescription, string $productPrice, string $productStock)
    {
        $name = new ProductName($productName);
        $description = new ProductDescription($productDescription);
        $price = new ProductPrice($productPrice);
        $stock = new ProductStock($productStock);

        $product = Product::create($name, $description, $price, $stock);

        $this->repository->save($product);
        return $product;

    }
}
