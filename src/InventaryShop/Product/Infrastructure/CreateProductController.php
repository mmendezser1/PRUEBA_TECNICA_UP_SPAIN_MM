<?php

namespace Src\InventaryShop\Product\Infrastructure;

use Illuminate\Http\Request;
use Src\InventaryShop\Product\Application\CreateProductUseCase;
use Src\InventaryShop\Product\Infrastructure\Repositories\EloquentProductRepository;

final class CreateProductController
{
    private $repository;
    public function __construct(EloquentProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $productName = $request->input('name');
        $productDescription = $request->input('description');
        $productPrice = $request->input('price');
        $productStock = $request->input('stock');

        $createProductUseCase = new CreateProductUseCase($this->repository);

        $newProduct = $createProductUseCase->__invoke($productName, $productDescription, $productPrice, $productStock);

        return $newProduct;

    }
}
