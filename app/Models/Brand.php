<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'status', 'name', 'description'];

    static function storeBrands($req)
    {
        $data = new Brand();
        $data->name = $req->brand_name;
        $data->description = $req->brand_description;
        $data->save();
    }

    static function updateStatus($id)
    {
        $old = Brand::find($id);
        if ($old->status == 1) {
            $old->update(['status' => 0]);
        } else {
            $old->update(['status' => 1]);
        }
    }

    static function updateBrand($req, $id)
    {
        $old = Brand::find($id);
        $old->name = $req->brand_name;
        $old->description = $req->brand_description;
        $old->save();
    }
}
