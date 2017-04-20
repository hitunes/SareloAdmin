<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

use App\Models\UserAddress;


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

            \Auth::user()->user_address()->save($address);

            \Session::put('alert_message', 'Address Added');
        }

        return view('account.new-address');
        
    }
}
