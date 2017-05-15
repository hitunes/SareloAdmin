<?php
namespace App\Http\Controllers;

use Auth;
use \Cart;
use App\Models\Order;
use App\Models\Charge;
use App\Domain\Helpers;
use App\Mail\OrderInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

         dd($order);
        return view('payment.index', compact('order', 'charge_arr'));
    }

    public function complete($order_unique_reference)
    {
        $order = Order::with(['order_products', 'orderSlot' => function($q){
                        $q->with('slot');
                        }])
                    ->where('order_unique_reference', $order_unique_reference)
                    ->first();
        //clear cart
        Cart::destroy();

        //mail user
        try {
            Mail::to(Auth::user())->send(new OrderInvoice($order));
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }

        return view('payment.complete', compact('order'));
    }

}