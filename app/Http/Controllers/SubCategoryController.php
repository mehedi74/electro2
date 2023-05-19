<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subCategories = SubCategory::all();
        return view('admin.sub-category.index', ['subCategories' => $subCategories]);
    }

    public function create()
    {
        //category is sharing from ASP_VIEW
        return view('admin.sub-category.create');
    }


    public function store(Request $request)
    {
        SubCategory::storeSubCategory($request);
        return back()->with('msg', 'Sub Category added successfully');
    }

    public function edit(string $id)
    {
        //category is sharing from ASP_VIEW
        $subCategory = SubCategory::find($id);
        return view('admin.sub-category.edit', ['subCategory' => $subCategory]);
    }


    public function update(Request $request, string $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/subcategories')->with('msg', 'Sub Category Updated Successfully');
    }

    public function destroy(string $id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        return back()->with('msg', 'Sub Category Deleted successfully');
    }

    public function updateStatus($id)
    {
        SubCategory::updateStatus($id);
        return back()->with('msg', 'Status Updated successfully');
    }

}
