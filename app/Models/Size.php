<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'status', 'name'];

    static function storeSize($req)
    {
        $size = explode(',', $req->size_name);
        $sizes = json_encode($size);
        $data = new Size();
        $data->name = $sizes;
        $data->save();
    }

    static function updateSizeStatus($id)
    {
        $data = Size::find($id);
        if ($data->status == 1) {
            $data->update(['status' => 0]);
        } else {
            $data->update(['status' => 1]);
        }
    }

    static function updateSize($req, $id)
    {
        $data = Size::find($id);
        $size = explode(',', $req->size_name);
        $sizes = json_encode($size);
        $data->name = $sizes;
        $data->save();
    }
}
