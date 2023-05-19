<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'status', 'name', 'description'];

    static function storeUnit($req)
    {
        $data = new Unit();
        $data->name = $req->unit_name;
        $data->description = $req->unit_description;
        $data->save();
    }

    static function updateUnitStatus($id)
    {
        $data = Unit::find($id);
        if ($data->status == 1) {
            $data->update(['status' => 0]);
        } else {
            $data->update(['status' => 1]);
        }
    }

    static function updateUnit($req, $id)
    {
        $old = Unit::find($id);
        $old->name = $req->unit_name;
        $old->description = $req->unit_description;
        $old->save();
    }
}
