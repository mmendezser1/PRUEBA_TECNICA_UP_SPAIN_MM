<?php

namespace src\InventaryShop\Product\Infrastructure;

use Illuminate\Http\Request;
use Src\BoundedContext\User\Infrastructure\Repositories\EloquentProductRepository;
use Src\InventaryShop\Product\Application\GetProductUseCase;

final class GetProductController
{
    private $repository;

    public function __construct(EloquentProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $userId = (int) $request->id;

        $getUserUseCase = new GetProductUseCase($this->repository);
        $user = $getUserUseCase->__invoke($userId);

        return $user;
    }
}
