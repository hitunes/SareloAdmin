<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserAddress;

use App\Domain\Helpers;

use Auth;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $basket = Helpers::getCartSummary();

        return view('address.create', compact('basket'));
    }

    public function store(Request $request)
    {
        if($request->isMethod('post')){

            $this->validate($request, [
                'phone' => 'required|digits:11',
                'address' => 'required|min:10',
                'city' => 'required|min:3',
            ]);

            $new_address = new UserAddress($request->all());

            Auth::user()->user_addresses()->save($new_address);

            return redirect('/checkout/choose-address');
        }

        return redirect('/new-address');
    }
}
