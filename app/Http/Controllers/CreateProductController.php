<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{

    private $createProductController;

    public function __construct(\Src\InventaryShop\Product\Infrastructure\CreateProductController $createProductController)
    {
        $this->createProductController = $createProductController;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $newProduct = new ProductResource($this->createProductController->__invoke($request));

        return response($newProduct, 200);
    }
}
