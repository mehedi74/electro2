<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'status'];

    static function storeColor($req)
    {
        $color = explode(',', $req->color_name);
        $colors = json_encode($color);
        $data = new Color();
        $data->name = $colors;
        $data->save();
    }

    static function updateStatus($id)
    {
        $data = Color::find($id);
        if ($data->status == 1) {
            $data->update(['status' => 0]);
        } else {
            $data->update(['status' => 1]);
        }
    }

    static function updateColor($req, $id)
    {
        $color = explode(',', $req->color_name);
        $colors = json_encode($color);
        $data = Color::find($id);
        $data->name = $colors;
        $data->save();
    }
}
