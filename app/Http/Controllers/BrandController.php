<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', ['brands' => $brands]);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        Brand::storeBrands($request);
        return redirect('/brands')->with('msg', 'Brand Added Successfully');
    }

    public function edit(string $id)
    {
        $brand = Brand::find($id);
        return view('admin.brands.edit', ['brand' => $brand]);
    }

    public function update(Request $request, string $id)
    {
        Brand::updateBrand($request, $id);
        return back()->with('msg', 'Brand Updated Successfully');
    }

    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return back()->with('msg', 'Brand Deleted Sucessfully');
    }

    public function updateStatus($id)
    {
        Brand::updateStatus($id);
        return back()->with('msg', 'Status Updated Sucessfully');
    }

}
