<?php 
namespace App\Transformers;

use App\Models\Charge;

use League\Fractal;

class ChargeTransformer extends Fractal\TransformerAbstract
{
    
    function transform(Charge $charge)
    {
        return [
            'id' => $charge->id,
            'name' => $charge->title,
            'description' => $charge->description,
            'fixed_amount' => $charge->fixed_amount,
            'percentage' => $charge->percentage,
        ];
    }
}
