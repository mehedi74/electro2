<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.index', ['colors' => $colors]);
    }

    public function create()
    {
        return view('admin.color.create');
    }

    public function store(Request $request)
    {
        Color::storeColor($request);
        return back()->with('msg', 'Colors Added Successfully');
    }

    public function edit(string $id)
    {
        $color = Color::find($id);
        return view('admin.color.edit', ['color' => $color]);
    }

    public function update(Request $request, string $id)
    {
        Color::updateColor($request, $id);
        return back()->with('msg', 'Colors Updated Successfully');
    }

    public function destroy(string $id)
    {
        $color = Color::find($id);
        $color->delete();
        return back()->with('msg', 'Color Deleted Successfully');
    }

    public function updateStatus($id)
    {
        Color::updateStatus($id);
        return back()->with('msg', 'Status Updated Successfully');
    }

}
