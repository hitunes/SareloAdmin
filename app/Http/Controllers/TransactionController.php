<?php
namespace App\Http\Controllers;

use \Cart;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, ['order_id' => 'required']);

        $order = Order::with('user')->where('id', $request->order_id)->first();

        $data = [
            'order_id' => $order->id,
            'amount' => $order->total,
            'reference' => $order->order_unique_reference,
            'status' => 'unpaid',
        ];

        $transaction = (Transaction::create($data))->toArray();

        Order::where('id', $order->id)->update(['payment_method' => 'online']);

        $transaction['user'] = $order->user;

        return response()->json($transaction);
    }

    public function update(Request $request, $transaction_id)
    {
        $transaction = Transaction::find($transaction_id)->update($request->all());

        if($request->status == 'success'){

            $transaction = Transaction::find($transaction_id);

            Order::where('id', $transaction->order_id)->update(['payment_status' => 'paid']);

            Cart::destroy();
        }

        return response()->json(['status' => 'success']);
    }

    public function bankCheckout($order_unique_reference)
    {
        Order::where('order_unique_reference', $order_unique_reference)
                ->update(['payment_method' => 'bank']);

        return redirect('/thankyou/'.$order_unique_reference);
    }

}