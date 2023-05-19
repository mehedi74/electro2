<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('admin.unit.index', ['units' => $units]);
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request)
    {
        Unit::storeUnit($request);
        return back()->with('msg', 'Unit Added Successfully');
    }

    public function edit(string $id)
    {
        $unit = Unit::find($id);
        return view('admin.unit.edit', ['unit' => $unit]);
    }

    public function update(Request $request, string $id)
    {
        Unit::updateUnit($request, $id);
        return back()->with('msg', 'Unit  Updated Successfully');
    }

    public function destroy(string $id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect('/units')->with('msg', 'Unit Deleted Successfully');
    }

    public function updateStatus($id)
    {
        Unit::updateUnitStatus($id);
        return redirect('/units')->with('msg', 'Unit Status Updated Successfully');
    }

}
