<?php
namespace App\Transformers;

use App\Models\Product;
use League\Fractal;

class ProductTransformer extends Fractal\TransformerAbstract
{

    function transform(Product $product)
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'unit' => ($product->unit_type)? $product->unit_type->name: "",
            "img" => env("MEDIA_CDN").$product->products_image
        ];
    }
}
