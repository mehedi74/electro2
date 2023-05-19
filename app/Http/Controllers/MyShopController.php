<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyShopController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->latest()->get();
//        $topSales = DB::table('products')
//            ->leftJoin('order_details', 'products.id', '=', 'order_details.product_id')
//            ->selectRaw('products.id, SUM(order_details.product_sales_quantity) as total')
//            ->groupBy('products.id')
//            ->orderBy('total', 'desc')
//            ->take(6)
//            ->get();
//        $topSaleProducts = [];
//        foreach ($topSales as $topSale) {
//            $product = Product::find($topSale->id);
//            $topSaleProducts[] = $product;
//        }
        return view('website.home.index', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $products = Product::all();
        return view('website.product.single-product', compact('product', 'products'));
    }

    public function productByCategory($id)
    {
        $category = Category::find($id);
        $products = Product::all();
        return view('website.product.product-by-category', compact('products', 'category'));
    }

    public function productBySubCategory($id)
    {
        $subcategory = SubCategory::find($id);
        $products = Product::all();
        return view('website.product.product-by-subcategory', compact('products', 'subcategory'));
    }

    public function productByBrand($id)
    {
        $brand = Brand::find($id);
        $products = Product::all();
        return view('website.product.product-by-brand', compact('products', 'brand'));
    }

    public function search(Request $req)
    {
        if ($req->category == 'ALL') {
            $products = Product::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $req->product . '%')->get();
            return view('website.search.index', compact('products'));
        } else {
            $products = Product::orderBy('id', 'desc')->where('cat_id', $req->category)->where('name', 'LIKE', '%' . $req->product . '%')->get();
            return view('website.search.index', compact('products'));
        }
    }
}
