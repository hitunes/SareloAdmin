<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Domain\Helpers;

use App\Models\Order;

class PaymentController extends Controller
{
    //add payment_method nullable to orders table
    //generate order unique reference

    public function index($order_unique_reference)
    {
        $basket = Helpers::getCartSummary();

        $order = Order::where('order_unique_reference', $order_unique_reference)->first();

        return view('payment.index', compact('basket', 'order'));
    }

    public function pay($value='')
    {
        # code...
    }
}
