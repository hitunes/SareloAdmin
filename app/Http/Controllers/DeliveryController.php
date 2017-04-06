<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Domain\Helpers;

use App\Models\Slot;


class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slots = Slot::getAvailableSlot(Carbon::now());

        $basket = Helpers::getCartSummary();
      
        return view('checkout.select-slot', compact('slots', 'basket'));
    }
}
