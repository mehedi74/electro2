<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{

    public function index()
    {
        $sizes = Size::all();
        return view('admin.sizes.index', ['sizes' => $sizes]);
    }

    public function create()
    {
        return view('admin.sizes.create');
    }

    public function store(Request $request)
    {
        Size::storeSize($request);
        return back()->with('msg', 'Sizes uploaded successfully');
    }

    public function edit(string $id)
    {
        $size = Size::find($id);
        return view('admin.sizes.edit', ['size' => $size]);
    }

    public function update(Request $request, string $id)
    {
        Size::updateSize($request, $id);
        return back()->with('msg', 'Size updated Sucessfully');
    }

    public function destroy(string $id)
    {
        $size = Size::find($id);
        $size->delete();
        return back()->with('msg', 'Size Deleted successfully');
    }

    public function updateStatus($id)
    {
        Size::updateSizeStatus($id);
        return back()->with('msg', 'Status updated successfully');
    }

}
