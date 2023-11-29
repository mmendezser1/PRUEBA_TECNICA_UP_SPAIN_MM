<?php

namespace Src\InventaryShop\Product\Infrastructure\Repositories;

use App\Product as EloquentProductModel;
use Src\InventaryShop\Product\Domain\Contracts\ProductRepositoryContract;
use Src\InventaryShop\Product\Domain\Product;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductDescription;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductId;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductName;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductPrice;
use Src\InventaryShop\Product\Domain\ValueObjects\ProductStock;

final class EloquentProductRepository implements ProductRepositoryContract
{
    private $eloquentProductModel;

    public function __construct()
    {
        $this->eloquentProductModel = new EloquentProductModel;
    }

    public function find(ProductId $id)
    {

        $product = $this->eloquentProductModel->find($id->value());
        if (!isset($product)) {
            return null;
        }

        return new Product(new ProductName($product->name), new ProductDescription($product->description), new ProductPrice($product->price), new ProductStock($product->stock));

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
