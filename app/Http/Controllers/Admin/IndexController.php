<<<<<<< HEAD
<?php 
=======
<?php

>>>>>>> template
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

<<<<<<< HEAD
use App\UnitType;
use Illuminate\Http\Request;
use Session;

=======
use App\Models\Charge;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
>>>>>>> template
	public function index()
	{
		return view('admin.dashboard.index');
	}
<<<<<<< HEAD
?>
=======
}
>>>>>>> template
