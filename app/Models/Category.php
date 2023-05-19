<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'status', 'name'];

    static function storeCategory($req)
    {
        $data = new Category();
        $data->name = $req->cat_name;
        $data->description = $req->cat_description;
        $data->image = self::imageUrl($req);
        $data->save();
    }

    static function imageUrl($req)
    {
        if ($req->hasFile('cat_image')) {
            $file = $req->file('cat_image');
            $fileOriginalName = $file->getClientOriginalName();
            $directory = 'assets/admin/img/category/';
            $file->move($directory, $fileOriginalName);
            return $directory . $fileOriginalName;
        }
    }

    static function updateStatus($id)
    {
        $data = Category::find($id);
        if ($data->status == 1) {
            $data->update(['status' => 0]);
        } else {
            $data->update(['status' => 1]);
        }
    }

    static function updateCategory($req, $id)
    {
        $old = Category::find($id);
        $old->name = $req->cat_name;
        $old->description = $req->cat_description;
        if ($req->hasFile('cat_image')) {
            if (file_exists($old->image)) {
                unlink($old->image);
            }
            $old->image = self::imageUrl($req);
        }
        $old->save();
    }
}
