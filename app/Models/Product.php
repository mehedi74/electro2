<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'cat_id', 'subcat_id', 'br_id', 'unit_id', 'size_id', 'color_id', 'code', 'price', 'image', 'status', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'br_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public static  function totalProductBySubCategory($subcat_id){
        $total = Product::where('subcat_id',$subcat_id)->count();
        return $total;
    }
    public static  function totalProductByCategory($cat_id){
        $total = Product::where('cat_id',$cat_id)->count();
        return $total;
    }
    public static  function totalProductByBran($br_id){
        $total = Product::where('br_id',$br_id)->count();
        return $total;
    }


    static function storeProduct($req)
    {
        $product = new Product();
        $product->code = $req->product_code;
        $product->cat_id = $req->pr_category;
        $product->subcat_id = $req->pr_subcategory;
        $product->br_id = $req->pr_brand;
        $product->unit_id = $req->pr_unit;
        $product->size_id = $req->pr_size;
        $product->color_id = $req->pr_color;
        $product->name = $req->product_name;
        $product->description = $req->pr_description;
        $product->price = $req->pr_price;
        $product->image = self::imageUrl($req);
        $product->save();
    }

    static function imageUrl($req)
    {
        $image = array();
        if ($req->hasFile('file')) {
            $files = $req->file('file');
            foreach ($files as $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $directory = 'assets/admin/img/product/';
                $file->move($directory, $fileOriginalName);
                $data = $directory . $fileOriginalName;
                $image[] = $data;
            }
        }
        $img = implode('|', $image);
        return $img;
    }

    static function updateStatus($id)
    {
        $data = Product::find($id);
        if ($data->status == 1) {
            $data->update(['status' => 0]);
        } else {
            $data->update(['status' => 1]);
        }
    }

    static function updateProduct($req, $id)
    {
        $product = Product::find($id);
        $product->code = $req->product_code;
        $product->cat_id = $req->pr_category;
        $product->subcat_id = $req->pr_subcategory;
        $product->br_id = $req->pr_brand;
        $product->unit_id = $req->pr_unit;
        $product->size_id = $req->pr_size;
        $product->color_id = $req->pr_color;
        $product->name = $req->product_name;
        $product->description = $req->pr_description;
        $product->price = $req->pr_price;
//
//        if($req->hasFile('file[]')) {
//            $data = explode('|', $product->image);
//            if (file_exists($product->image)) {
//                foreach ($data as $value) {
//                    Storage::delete($value);
//                }
//            }
//        }
        $product->image = self::imageUrl($req);
        $product->save();
    }
}
