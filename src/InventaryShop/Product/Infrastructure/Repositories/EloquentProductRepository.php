<?php

declare (strict_types = 1);

namespace Src\BoundedContext\User\Infrastructure\Repositories;

use App\Product as EloquentProductModel;
use src\InventaryShop\Product\Domain\Contracts\ProductRepositoryContract;
use src\InventaryShop\Product\Domain\Product;
use src\InventaryShop\Product\Domain\ValueObjects\ProductDescription;
use src\InventaryShop\Product\Domain\ValueObjects\ProductId;
use src\InventaryShop\Product\Domain\ValueObjects\ProductName;
use src\InventaryShop\Product\Domain\ValueObjects\ProductPrice;
use src\InventaryShop\Product\Domain\ValueObjects\ProductStock;

final class EloquentProductRepository implements ProductRepositoryContract
{
    private $eloquentProductModel;

    public function __construct()
    {
        $this->eloquentProductModel = new EloquentProductModel;
    }

    public function find(ProductId $id)
    {
        $product = $this->eloquentProductModel->findOrFail($id->value());

        return new Product(
            new ProductName($product->name),
            new ProductDescription($product->description),
            new ProductPrice($product->price),
            new ProductStock($product->stock),
        );
    }
    public function save(Product $product)
    {

        $newProduct = $this->eloquentProductModel;

        $data = [
            'name' => $newProduct->name()->value(),
            'description' => $newProduct->description()->value(),
            'price' => $newProduct->price()->value(),
            'stock' => $newProduct->stock()->value(),
        ];

        $newProduct->create($data);

    }

    public function all()
    {

    }

}
