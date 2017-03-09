<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Charge;
use Illuminate\Http\Request;
use Session;

class ChargesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $charges = Charge::where('title', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('percentage', 'LIKE', "%$keyword%")
				->orWhere('fixed_amount', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $charges = Charge::paginate($perPage);
        }

        return view('admin.charges.index', compact('charges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.charges.create');
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
        
        Charge::create($requestData);

        Session::flash('flash_message', 'Charge added!');

        return redirect('admin/charges');
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
        $charge = Charge::findOrFail($id);

        return view('admin.charges.show', compact('charge'));
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
        $charge = Charge::findOrFail($id);

        return view('admin.charges.edit', compact('charge'));
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
        
        $charge = Charge::findOrFail($id);
        $charge->update($requestData);

        Session::flash('flash_message', 'Charge updated!');

        return redirect('admin/charges');
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
        Charge::destroy($id);

        Session::flash('flash_message', 'Charge deleted!');

        return redirect('admin/charges');
    }
}
