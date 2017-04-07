<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\UnitType;
use Illuminate\Http\Request;
use Session;

	public function user()
	{
		return view('admin.dashboard.users');
	}
?>
