<?php 
namespace App\Transformers;

use App\Model\Product;
use League\Fractal;

class ProductTransformer extends Fractal\TransformerAbstract
{
    
    function __construct(Product $product)
    {
        return [
            
        ]
    }
}
