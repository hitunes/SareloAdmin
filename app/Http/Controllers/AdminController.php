<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Role;


class AdminController extends Controller
{
    public function index(Request $request)
    {
        $completedOrders = DB::table('orders')->where('status', 'Delivered')->sum('total');
        $ordersResult = number_format($completedOrders);
        $users = User::join('roles', 'users.role_id', 'roles.id')
                    ->where('roles.name', 'User')->count();
        $products = Product::count();
        $keyword = $request->get('search');
        $perPage = 10;
        if (!empty($keyword)) {
            $orders = Order::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $orders = Order::paginate($perPage);
        }
    	return view('admin.dashboard.index', compact('ordersResult', 'users', 'products', 'orders'));
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
                        if ($authenticate_user) {
                            return redirect('admin/dashboard')->with('success','Welcome Admin');
                        }else{
                            return redirect('/admin')->with('delete_message', 'Wrong Email or Password');
                        }
                break;
                case false:
                    if (Auth::check()) {
                        return redirect('admin/dashboard');
                    }
                    return view('/admin.dashboard.login');
                break;
                default:
                    if (Auth::check()) {
                        return redirect('admin/dashboard');
                    }
                    return view('/admin.dashboard.login');
                break;
            }
    }

    public function signup(Request $request)
    {
         $method = $request->isMethod('post');
            switch ($method) {
                case true:
                        $this->validate($request, [
                            'email' => 'required|unique:users',
                            'password' => 'required|min:4',
                            'confirm_password' => 'required|min:4'
                        ]);
                        $password = $request->input('password');
                        $confirm_password = $request->input('confirm_password');
                        if ($password === $confirm_password) {
                            $role = Role::where('name', 'Admin')->first();
                            $user = new User([
                              'email' => $request->input('email'),
                              'password' => Hash::make($password),
                              ]);
                            $user->role()->associate($role);
                            $user->save();
                            return redirect('admin/dashboard')->with('success','Admin created successfully!');
                        }else{
                            return redirect('/admin/create')->with('delete_message', 'Password does not match!');
                        }
                break;
                case false:
                    return view('/admin.create');
                break;
                default:
                    return view('/admin.create');
                break;
            }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
    public function destror($id)
    {
       Order::findOrFail($id);
        Order::destroy($id);
        return redirect('admin/orders')->with('delete_message', 'Order successfully deleted!'); 
    }
}
