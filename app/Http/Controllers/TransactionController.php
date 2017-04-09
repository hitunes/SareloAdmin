<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

use App\Models\Transaction;

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
            'status' => 'pending'
        ];

        $transaction = (Transaction::create($data))->toArray();

        $transaction['user'] = $order->user;

        return response()->json($transaction);
    }


    public function update(Request $request, $transaction_id)
    {
        $transaction = Transaction::find($transaction_id)->update($request->all());
      
        if($request->status == 'success')
            Order::where('id', $transaction->order_id)->update(['payment_status' => 'success']);

        return response()->json(['status' => 'success']);
    }

}
