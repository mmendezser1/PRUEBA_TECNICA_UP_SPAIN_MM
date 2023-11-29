<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class GetProductController extends Controller
{

    private $getProductController;

    public function __construct(\src\InventaryShop\Product\Infrastructure\GetProductController $getProductController)
    {
        $this->getProductController = $getProductController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = new ProductResource($this->getProductController->__invoke($request));

        return response($user, 200);
    }
}
