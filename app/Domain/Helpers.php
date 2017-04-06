<?php

namespace App\Domain;

use Cart;
use App\Models\Charge;

/**
 * Helper methods
 */
class Helpers
{
    
    public static function getCartSummary()
    {        
        $items_total = 0;
        $total = 0;
         
         $items = Cart::content();

         foreach ($items as $item) {
             $items_total += $item->price * $item->qty;
         }

         $charges = Charge::all();

    
         $charges_subtotal = 0;

         foreach ($charges as $charge) {

            if($charge['percentage'] <= 0)
                $charges_subtotal += $charge['fixed_amount'];
            else  
                $charges_subtotal += $items_total * ($charge['percentage']/100);
         }

       $charges->each(function($charge) use (&$taxes, $items_total ){

            if(strtolower($charge->title) == "delivery fee"){

                if($charge['percentage'] <= 0)
                    $taxes['delivery_fee'] = $charge['fixed_amount'];
                else  
                    $taxes['delivery_fee'] = $items_total * ($charge['percentage']/100);
            }
            
            if(strtolower($charge->title) == "service charge"){

                if($charge['percentage'] <= 0)
                    $taxes['service_charge'] = $charge['fixed_amount'];
                else  
                    $taxes['service_charge'] = $items_total * ($charge['percentage']/100);
            }

         });
        
         $total +=  $charges_subtotal + $items_total;


         return [
            'sub_total' => $items_total,
            'total' => $total,
            'taxes' => $taxes,
         ];
    }
}


