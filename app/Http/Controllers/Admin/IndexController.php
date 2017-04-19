<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Models\Charge;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
	public function index()
	{
		return view('admin.dashboard.index');
	}
}
