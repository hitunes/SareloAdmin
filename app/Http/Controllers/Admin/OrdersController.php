<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;
use Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $orders = Order::where('user_id', 'LIKE', "%$keyword%")
				->orWhere('total', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $orders = Order::paginate($perPage);
        }

        return view('admin.dashboard.order', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Order::create($requestData);

        Session::flash('flash_message', 'Order added!');

        return redirect('admin.dashboard.orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $order = Order::with(['order_products' => function($q){
                        $q->with('product');
                }])->findOrFail($id);
        // dd($order);
        return view('admin.dashboard.order_view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.dashboard.order_view', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $order = Order::findOrFail($id);
        $order->update($requestData);

        Session::flash('flash_message', 'Order updated!');

        return redirect('admin/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Order::destroy($id);

        Session::flash('flash_message', 'Order deleted!');

        return redirect('admin/orders');
    }

    public function updateStatus(Request $request, $id)
    {
       if ($request->ajax()) {

           $order = Order::where('id', $id)->update($request->all());

           return $request->status;

       }else{
            return;
       }
    }

    public function paymentStatus(Request $request, $id)
    {
       if ($request->ajax()) {

           $order = Order::where('id', $id)->update($request->all());

           return $request->payment_status;

       }else{
            return;
       }
    }
}
