<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AccountController extends Controller
{
    public function updateUserDetails(Request $request)
    {
    	$this->validate($request, [
    			'first_name' => 'required',
    			'last_name' => 'required',
    			'phone' => 'required',
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
    			'email' => 'required',
    		]);

    	Auth::user()->first_name = $request->email;

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
}
