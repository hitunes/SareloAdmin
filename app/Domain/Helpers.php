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

         $total +=  round($charges_subtotal + $items_total, 2);


         return [
            'sub_total' => $items_total,
            'total' => $total,
            'taxes' => $taxes,
         ];
    }

    public static function generateOrderReference($order_id)
    {
        $unique_id = base_convert($order_id, 10, 16);

        $diff = 6 - strlen($unique_id);

        if($diff < 0){
            //reference should not be more than 6 character long
            throw new Exception("Error Generating order unique reference", 1);
        }

        return str_pad($unique_id, 6, 0, 0);
    }
}


