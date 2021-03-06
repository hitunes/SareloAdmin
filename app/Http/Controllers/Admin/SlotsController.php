<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Slot;
use Illuminate\Http\Request;
use Session;
use App\Slot_time;

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
        $perPage = 10;
        if (!empty($keyword)) {
            $slots = Slot::where('time_range', 'LIKE', "%$keyword%")
				->orWhere('slot_available', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $slots = Slot::latest()->paginate($perPage);
        }

        return view('admin.dashboard.slots', compact('slots'));
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
        $method = $request->isMethod('post');
        switch ($method) {
            case true:
                    $this->validate($request, [
                        'day_of_week' => 'required',
                        'slot_available' => 'required',
                        'from' => 'required',
                        'to' => 'required',
                        'moment1' => 'required',
                        'moment2' => 'required'
                    ]);
                    $day_of_week = $request->input('day_of_week');

                    $from = $request->input('from');
                    $to = $request->input('to');
                    $moment1 = $request->input('moment1');
                    $moment2 = $request->input('moment2');

                    $time_range = $from.$moment1."-".$to.$moment2;
                    $slot_available = $request->input('slot_available');
                    $slot = new Slot([
                        'time_range' => $time_range,
                        'day_of_week' => $day_of_week,
                        'slot_available' => $slot_available 
                        ]);
                    $slot->save();
                    Session::flash('flash_message', 'Slot added!');
                    return redirect('admin/slots')->with('success', 'Slot Added Successfully!');
                break;
            case false:
                    return view('admin/slots/create');
                break;
            default:
                    return view('admin/slots/create');
                break;
        } 
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
        $this->validate($request, [
                        'time_range' => 'required',
                        'slot_available' => 'required'
                    ]);
        $requestData = $request->all();
        
        $slot = Slot::findOrFail($id);
        $slot->update($requestData);

        Session::flash('flash_message', 'Slot updated!');

        return redirect('admin/slots')->with('success', 'Slot Successfully Updated');
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
        return redirect('admin/slots')->with('delete_message', 'Slot Deleted Successfully!');
    }
}
