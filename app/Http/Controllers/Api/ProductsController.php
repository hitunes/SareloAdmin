<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

use App\Models\Product;

use League\Fractal;

use App\Transformers\ProductTransformer;


class ProductsController extends ApiController
{

    public function search(Request $request)
    {
        $products = Product::with('unit_type')->where('name', 'like', $request->search_term.'%')->get();
       
        $resource = new Fractal\Resource\Collection($products, new ProductTransformer);

        $products =  $this->manager->createData($resource)->toArray();

        $payload = ['products' => $products['data'], 'charges' => $this->charges['data']];

        return response()->json(['status' => 'success', 'data' => $payload]);
       
    }
}
