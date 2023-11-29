<?php

namespace Src\InventaryShop\Product\Infrastructure;

use Illuminate\Http\Request;
use Src\InventaryShop\Product\Application\GetProductUseCase;
use Src\InventaryShop\Product\Infrastructure\Repositories\EloquentProductRepository;

final class GetProductController
{
    private $repository;

    public function __construct(EloquentProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $productId = (int) $request->id;

        $getProductUseCase = new GetProductUseCase($this->repository);

        $user = $getProductUseCase->__invoke($productId);

        return $user;
    }
}
