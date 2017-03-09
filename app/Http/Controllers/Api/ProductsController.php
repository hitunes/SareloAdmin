<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;

use League\Fractal;

use App\Transformers\ProductTransformer;

class ProductsController extends Controller
{
    public function search(Request $request)
    {
        $products = Product::where('name', 'like', $request->search_term)->get();

        // $resource = new Fractal\Resource\Item($book, new BookTransformer);
        $resource = new Fractal\Resource\Collection($products, new ProductTransformer);

        response()->json(['status' => 'success', 'data' => $resource]);
    }
}
