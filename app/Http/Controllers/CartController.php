<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req, $id)
    {
        $product = Product::find($id);
        $cartproduct = array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $req->quantity,
            'attributes' => array(
                'image' => $product->image,
                'quantity' => $req->quantity,
                'size' => $req->product_size,
                'color' => $req->product_color,
            )
        );
        \Cart::add($cartproduct);

        return back();
    }
    public function updateCart(Request $req, $id)
    {
        $product = Product::find($id);
        $cartproduct = array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $req->quantity,
            'attributes' => array(
                'image' => $product->image,
                'quantity' => $req->quantity,
                'size' => $req->product_size,
                'color' => $req->product_color,
            )
        );
        \Cart::update($id,$cartproduct);

        return back()->with('msg', 'Congrats product updated to your cart successfully');
    }

    public function deleteFromCart($id)
    {
        \Cart::remove($id);
         return back();
    }
    public function editCart()
    {
       return view('website.cart.edit');
    }
}
