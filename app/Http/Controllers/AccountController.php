<?php
namespace App\Http\Controllers;

use Auth;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function updateUserDetails(Request $request)
    {
    	$this->validate($request, [
    			'first_name' => 'required|alpha',
    			'last_name' => 'required|alpha',
    			'phone' => 'required|digits:11',
    		]);

    	Auth::user()->first_name = $request->first_name;
    	Auth::user()->last_name = $request->last_name;
    	Auth::user()->phone = $request->phone;

    	if(Auth::user()->save()){
    		return redirect()->back()->with('status_message', 'User details updated');
    	}

    	return redirect()->back()->with('status_message', 'User not details updated');
    }

    public function updateEmail(Request $request)
    {
    	$this->validate($request, [
    			'email' => 'required|unique:users',
    		]);

    	Auth::user()->email = $request->email;

    	if(Auth::user()->save()){
    		return redirect()->back()->with('status_message', 'User email updated');
    	}

    	return redirect()->back()->with('status_message', 'User email not details updated');
    }


    public function changePassword(Request $request)
    {
    	$this->validate($request, [
    			'password' => 'required|confirmed',
    		]);

    	Auth::user()->password = bcrypt($request->password);

    	if(Auth::user()->save()){
    		return redirect()->back()->with('status_message', 'User password changed');
    	}

    	return redirect()->back()->with('status_message', 'User not password changed');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'address' => 'required',
                'city' => 'required|min:3|alpha'
            ]);

        $address = UserAddress::where('id', $id)->update($request->all());

        if($address)
            \Session::flash('status_message', 'Address updated');
        else
            \Session::flash('status_message', 'Address is not updated');

        return response()->json(['status' => 'done']);
    }
}
