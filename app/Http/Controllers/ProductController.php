<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Models\Unit;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::all();
        return view('admin.product.index', ['data' => $data]);
    }

    public function create()
    {
        //category is sharing throuth appservice provider via view::share
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('admin.product.create', compact('subCategories', 'brands', 'units', 'sizes', 'colors'));
    }


    public function store(Request $request)
    {
        Product::storeProduct($request);
        return redirect('/products')->with('msg', 'Product Uploaded Successfully');
    }

    public function edit(string $id)
    {
        $data = Product::find($id);
        $subCategory = SubCategory::all();
        $brand = Brand::all();
        $unit = Unit::all();
        $size = Size::all();
        $color = Color::all();
        return view('admin.product.edit', compact('data', 'subCategory', 'brand', 'unit', 'size', 'color'));
    }

    public function update(Request $request, string $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/products')->with('msg', 'Product Updated Successfully');
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('msg', 'Product Deleted Sucessfully');
    }

    public function updateStatus($id)
    {
        Product::updateStatus($id);
        return back()->with('msg', 'Product Status updated Successfully');
    }

}
