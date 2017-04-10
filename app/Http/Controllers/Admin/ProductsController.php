<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\UnitType;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
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
            $products = Product::where('name', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('category_id', 'LIKE', "%$keyword%")
				->orWhere('price', 'LIKE', "%$keyword%")
				->orWhere('unit', 'LIKE', "%$keyword%")
				->orWhere('unit_type_id', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $products = Product::paginate($perPage);
        }
        $categories = Category::all(); 
        $unit_type = UnitType::all();
        // dd($unit_type);

        return view('admin.dashboard.product_edit', ['products' => $products, 'unit_type' => $unit_type, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function add_product(Request $request)
    {
        $this->validate($request, [
            'name' => 'required', 
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'unit_type_id' => 'required',
            'category_id' => 'required'
        ]);
        //inserting data
        $product = new Product([
            'name' => $request->input('name'), //colecting value from user from the text box to column names on the right handside
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'unit' => $request->input('unit'),
            'unit_type_id' => $request->input('unit_type_id'),
            'category_id' => $request->input('category_id')
            ]);
        //retrieving data
        // dd($product);
        $product->save();
        return redirect('admin/products')->with('success', 'Product Uploaded Successfully!.');
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
        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
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
        $products = Product::all();
        $found_product = Product::findOrFail($id);
        $categories = Category::all(); 
        $unit_type = UnitType::all();
        // dd($products);exit;
        return view('admin.dashboard.update_product', compact('found_product', 'categories', 'unit_type', 'products'));
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
        
        $product = Product::findOrFail($id);
        $product->update($requestData);
        return redirect('admin.dashboard.product_edit', ['products' => $products, 'unit_type' => $unit_type, 'categories' => $categories])->with('success', 'Product Successfully Updated!');
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
        Product::findOrFail($id);
        Product::destroy($id);
        return redirect('admin/products')->with('delete_message', '  Product Successfully Deleted!');
    }
}
