<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Domain\Helpers;

class ConfirmCheckoutController extends Controller
{
    public function index()
    {
        //get slot and delivery_date
        $basket = Helpers::getCartSummary();
        return view('checkout.confirm', compact('basket'));
    }
}
