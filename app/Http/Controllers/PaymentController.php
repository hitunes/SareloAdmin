<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Domain\Helpers;

use App\Models\Charge;

use App\Models\Order;


class PaymentController extends Controller
{
    //add payment_method nullable to orders table
    //generate order unique reference

    public function index($order_unique_reference)
    {
        $charges = Charge::all();
    
        $order = Order::with(['orderProducts', 'orderSlot' => function ($q) {
                                return $q->with('slot');
                            }])->where('order_unique_reference', $order_unique_reference)->first();

        foreach ($charges as $charge) {

            if($charge['percentage'] <= 0)
                $charge_arr['service_charge'] = $charge['fixed_amount'];
            else  
                $charge_arr['ten_percent'] = $order->sub_total * ($charge['percentage']/100);
         }

        return view('payment.index', compact('order', 'charge_arr'));
    }

}
