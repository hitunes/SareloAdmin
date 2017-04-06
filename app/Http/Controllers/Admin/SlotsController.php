<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Slot;
use Illuminate\Http\Request;
use Session;

class SlotsController extends Controller
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
            $slots = Slot::where('time_range', 'LIKE', "%$keyword%")
				->orWhere('slot_available', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $slots = Slot::paginate($perPage);
        }

        return view('admin.slots.index', compact('slots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.slots.create');
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
        
        Slot::create($requestData);

        Session::flash('flash_message', 'Slot added!');

        return redirect('admin/slots');
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
        $slot = Slot::findOrFail($id);

        return view('admin.slots.show', compact('slot'));
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
        $slot = Slot::findOrFail($id);

        return view('admin.slots.edit', compact('slot'));
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
        
        $slot = Slot::findOrFail($id);
        $slot->update($requestData);

        Session::flash('flash_message', 'Slot updated!');

        return redirect('admin/slots');
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
        Slot::destroy($id);

        Session::flash('flash_message', 'Slot deleted!');

        return redirect('admin/slots');
    }
}
