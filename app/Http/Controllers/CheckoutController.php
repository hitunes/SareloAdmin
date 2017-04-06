<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Charge;
use App\Models\Slot;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderSlot;
use App\Models\Transaction;

use Carbon\Carbon;

use \Cart;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function billingAddress(Request $request)
    {
        
        if($request->isMethod('post')){

            $this->validate($request,[
                'name' => 'required',
                'phone' => 'required|min:11',
                'address' => 'required|min:10',
                'city' => 'required|min:3'
            ]);

            $request->session()->put('billing_address', $request->all());

            return redirect('/checkout/payment-details');
        }
       
        $slots = Slot::getAvailableSlot(Carbon::now());
       
        return view('checkout.address', compact('slots'));
    }


    public function payment(Request $request)
    {        
        $total = 0;
         
         $items = Cart::content();

         foreach ($items as $item) {
             $total += $item->price * $item->qty;
         }

         $charges = Charge::all();

         $charges_subtotal = 0;

         foreach ($charges as $charge) {

            if($charge['percentage'] <= 0)
                $charges_subtotal += $charge['fixed_amount'];
            else  
                $charges_subtotal += $total * ($charge['percentage']/100);
         }

         $total +=  $charges_subtotal;
      

        // dd(\Session::get('billing_address'));

        // return view('checkout.payment');
    }


    public function makeOrder(Request $request)
    {
         $total = 0;
         
         $items = Cart::content();

         foreach ($items as $item) {
             $total += $item->price * $item->qty;
         }

         $charges = Charge::all();

        $charges_subtotal = 0;

         foreach ($charges as $charge) {
            if($charge['percentage'] <= 0)
                $charges_subtotal += $charge['fixed_amount'];
            else  
                $charges_subtotal += $total * ($charge['percentage']/100);
         }

         $total +=  $charges_subtotal;

         $order = Order::create([
             'user_id' => Auth::user()->id,
             'total' => $total,
             'status' => 'pending'
         ]);

         $transaction_arr = [
             'reference' => $request->reference,
             'status' => 'pending',
             'response' => 'transaction started'
         ];
         $order->transactions()->save(new Transaction($transaction_arr));
    }

}
