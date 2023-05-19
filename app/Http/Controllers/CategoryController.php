<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $req)
    {
        Category::storeCategory($req);
        return redirect('/categories')->with('msg', 'Category Added Successfully');
    }

    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, string $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/categories')->with('msg', 'Category Updated successfully');
    }

    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('msg', 'Category Deleted successfully');
    }

    public function updateStatus($id)
    {
        Category::updateStatus($id);
        return back()->with('msg', 'Status Updated successfully');
    }

}
