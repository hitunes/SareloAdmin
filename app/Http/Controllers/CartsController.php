<?php
namespace App\Http\Controllers;

use \Cart;

use Illuminate\Http\Request;

class CartsController extends Controller
{

    public function addCartItem(Request $request)
    {
        $product_arr =  $request->all();

        $cart_arr = [
            'id' => $request->id,
            'name' => $request->name,
            'qty' => (int) $request->count,
            'price' => (double) $request->price,
            'options' => ['unit' => $request->unit]
        ];

       Cart::add($cart_arr);

       return response()->json(['status' => 'success', 'data' => Cart::content()]);
    }

    public function getCartItem($id)
    {
       $item = Cart::get($id);

       return response()->json(['status' => 'success', 'data' => $item]);
    }

    public function getCartItems()
    {
        return response()->json(['status' => 'success', 'data' => Cart::content()]);
    }

    public function updateCart(Request $request, $cart_id)
    {   
        $item = Cart::get($cart_id);

        $item = (array) $item;

        if($request->action == 'subtract')
            $qty = intval($item['qty'] - 1);
        
        if($request->action == 'addition')
            $qty = intval($item['qty'] + 1);

        if($qty > 0)
            Cart::update($cart_id, $qty);
        else
            Cart::remove($cart_id);
        
        return response()->json(['status' => 'success', 'data' => Cart::content()]);
        
    }


    public function deleteCartItem($id)
    {
        Cart::remove($id);

        return response()->json(['status' => 'success', 'data' => Cart::content()]);        
    }
}
