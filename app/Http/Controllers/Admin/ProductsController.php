<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\UploadedFile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\UnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        $perPage = 10;

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
        $unit_type = UnitType::all();
        return view('admin.dashboard.product_edit', ['products' => $products, 'unit_type' => $unit_type]);
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
            'name' => 'required|min:3',
            'description' => 'required|min:4',
            'price' => 'required|int',
            'unit' => 'required|integer',
            'unit_type_id' => 'required',
            'product_image' => 'required|image'
        ]);
        $filename = $filename = $request->file('product_image')->getClientOriginalName();

        $img_ext = ['.jpg', '.jpeg', '.PNG', '.png'];
        $filename = str_replace($img_ext, '', $filename);
        $store  = Storage::disk('custom')->put($filename, $request->file('product_image')); // first param name of folder second the content
        $product = new Product([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'unit' => $request->input('unit'),
            'unit_type_id' => $request->input('unit_type_id'),
            'products_image' => $store
        ]);
        $product->save();
        return redirect('admin/products')->with('success', 'Product Added Successfully!.');
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|int',
            'unit' => 'required|int',
            'unit_type_id' => 'required',
            'product_image' => 'required|image'
        ]);
        $filename = $request->file('product_image')->getClientOriginalName();
        $img_ext = ['.jpg', '.jpeg', '.PNG', '.png'];
        $filename = str_replace($img_ext, '', $filename);
        $store  = Storage::disk('custom')->put($filename, $request->file('product_image'));
        $requestData = $request->all();
        $unit_type = UnitType::all();
        $product = Product::findOrFail($id);
        $product->products_image = $store;
        $product->update($requestData);
        return redirect('admin/products')->with(['products' => $product, 'unit_type' => $unit_type])->with('success', 'Product Updated Successfully!.');
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
        return redirect('admin/products')->with('delete_message', '  Product has been Deleted!');
    }

    public function search(Request $request)
    {
        $method = $request->isMethod('post');
        switch ($method) {
            case true:
                $search = $request->input('search');
                if(!$search){
                    return redirect()->back()->with(['delete_message'=>'Please! type to search for a product']);
                }else{
                    $products = Product::latest()->where('name', 'LIKE', "%$search%")
                                            ->orWhere('description', 'LIKE', "%$search%")
                                            ->orWhere('price', 'LIKE', "%$search%")
                                            ->paginate(10);
                    $unit_type = UnitType::all();
                    return view('admin.dashboard.product_search', compact('products', 'unit_type'))->with('success' ,'Search result completed for '.$search);
                }
                break;
            case false:
                break;
            default:
                break;
        }
        
        
    }

}
