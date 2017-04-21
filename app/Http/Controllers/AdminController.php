<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $completedOrders = DB::table('orders')->where('status', 'Completed')->sum('total');
       $ordersResult = number_format($completedOrders);
        $users = User::where('role_id',1)->count();
        $products = Product::count();
    	return view('admin.dashboard.index', compact('ordersResult', 'users', 'products'));
    }
     public function users()
    {
    	return view('admin.dashboard.users');
    }

    public function orders()
    {
    	return view('admin.dashboard.order');
    }

    public function order_view()
    {
    	return view('admin.dashboard.order_view');
    }
    public function products()
    {
    	return view('admin.dashboard.product');
    }
    public function product_edit()
    {
    	return view('admin.dashboard.product_edit');
    }
    public function signin(Request $request)
    {
         $method = $request->isMethod('post');
            // dd($method);
            switch ($method) {
                case true:
                        $this->validate($request, [
                            'email' => 'required|required',
                            'password' => 'required|min:4'
                        ]);
                        $authenticate_user = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
                        // dd($authenticate_user);exit;
                        if ($authenticate_user) {
                            //i.e if email n password match using d auth class
                            //basically, attempt function under class Auth or Auth facade method collects all parameters i.e all input fields tovalidate in an associative array inform of key and valuefrm above, the key is the field or column declared fillable in the user model
                            return redirect('admin/dashboard')->with('success','Welcome Amin');
                        }else{
                            return redirect('/admin')->with('delete_message', 'Wrong Email or Password');            
                        }    
                break;
                case false:
                    return view('/admin.dashboard.login');    
                break;
                default:
                    return view('/admin.dashboard.login');    
                break;
            }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
