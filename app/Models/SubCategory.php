<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'status', 'name', 'cat_id', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    static function storeSubCategory($req)
    {
        $data = new SubCategory();
        $data->name = $req->subcat_name;
        $data->cat_id = $req->category_id;
        $data->description = $req->subcat_description;
        $data->save();
    }

    static function updateStatus($id)
    {
        $data = SubCategory::find($id);
        if ($data->status == 1) {
            $data->update(['status' => 0]);
        } else {
            $data->update(['status' => 1]);
        }
    }

//we can use eloquent query in 2 ways..
//     1.
//    static function updateSubCategory($req, $id)
//    {
//        $data = SubCategory::find($id);
//        $data->name = $req->subcat_name;
//        $data->cat_id = $req->category_id;
//        $data->description = $req->subcat_description;
//        $data->save();
//    }


//     2..=>
    static function updateSubCategory($req, $id)
    {
        $data = SubCategory::find($id);
        $data->update([
            'name' => $req->subcat_name,
            'cat_id' => $req->category_id,
            'description' => $req->subcat_description,
        ]);
    }


    // we can store and update data in one function like below...

//    static function storeOrUpdateSubCategory($req, $id = null)
//    {
//        SubCategory::updateOrCreate(['id' => $id], [
//            'cat_id' => $req->cat_id,
//            'name' => $req->subcategory_name,
//            'description' => $req->subcategory_description,
//            'status' => $req->subcategory_status,
//        ]);
//    }
}
