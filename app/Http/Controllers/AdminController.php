<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard.index');
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
}
