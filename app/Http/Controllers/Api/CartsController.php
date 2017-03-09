<?php
namespace App\Http\Controllers\Api;

use \Cart;

use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addCartItem(Request $request)
    {
       Cart::add($request);

       return Cart::content();
    }

    public function getCartItem($id)
    {
       return Cart::get($id);
    }

    public function getCartItems()
    {
        return Cart::content();
    }


    public function deleteCartItem($id)
    {
        Cart::remove($id);

        return Cart::content();
        
    }
}
