<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $completed_orders = Order::GetOrderDetails(\Auth::user()->id, 'completed')->get();

        $pending_orders = Order::GetOrderDetails(\Auth::user()->id, 'pending')->get();
        
        return view('account.index', compact('completed_orders', 'pending_orders'));
    }


    public function addresses()
    {
        $addresses = \Auth::user()->user_address;

        return view('account.addresses', compact('addresses'));
    }


    public function saveAddress(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate($request, [
                'address' => 'required',
                'phone' => 'required'
            ]);

            $address = new UserAddress($request->all());

            \Auth::user()->user_addresses()->save($address);

            \Session::put('alert_message', 'Address Added');
        }

        return view('account.new-address');
        
    }


    public function cancelOrder($order_id)
    {
        try{
            $order = Order::findOrFail($order_id);
        }
        catch(ModelNotFoundException $e){
            return redirct()->back()->with('status', 'Order not found');
        }
        
        if($order->status != "completed"){
            $order->status = "cancelled";
            $order->save();
        }

        return redirct()->back()->with('status', 'Order #'.$order->order_unique_reference." cancelled");
    }
}
