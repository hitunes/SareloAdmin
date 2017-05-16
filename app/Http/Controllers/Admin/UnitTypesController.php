<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UnitType;
use Illuminate\Http\Request;
use Session;
class UnitTypesController extends Controller
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
            $unittypes = UnitType::where('name', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $unittypes = UnitType::paginate($perPage);
        }

        return view('admin.dashboard.unit_type', compact('unittypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.unit-types.create');
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
                $requestData = $request->all();
                
                UnitType::create($requestData);

                Session::flash('flash_message', 'UnitType added!');

                return redirect('admin/unit-types');
                break;
            case false:
                    return view('admin/unit-types/create');
                break;
                    return view('admin/unit-types/create');
            default:
                    return view('admin/unit-types/create');
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
        $unittype = UnitType::findOrFail($id);

        return view('admin.unit-types.show', compact('unittype'));
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
        $unittype = UnitType::findOrFail($id);

        return view('admin.unit-types.edit', compact('unittype'));
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
        
        $unittype = UnitType::findOrFail($id);
        $unittype->update($requestData);

        Session::flash('flash_message', 'UnitType updated!');

        return redirect('admin/unit-types');
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
        UnitType::destroy($id);

        Session::flash('flash_message', 'UnitType deleted!');

        return redirect('admin/unit-types');
    }
}
