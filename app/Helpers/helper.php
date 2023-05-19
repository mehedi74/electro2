<?php

use App\Models\Size;
use App\Models\Color;
use Illuminate\Support\Facades\Session;

function getCartData()
{
    $cartdata = \Cart::getContent();
    return $cartdata->toArray();
}

function getSize(string $idAndIndex)
{
    $sizeidAndIndex = explode(':', $idAndIndex);
    $sizeid = 0;
    $indexid = 0;
    foreach ($sizeidAndIndex as $key => $data) {
        if ($key == 0) {
            $sizeid = $data;
        } else {
            $indexid = $data;
        }
    }
    $size = Size::where('id', $sizeid)->first();
    foreach (json_decode($size->name) as $key => $sizes) {
        if ($key == $indexid) {
            echo $sizes;
        }
    }
}

function getColor(string $idAndIndex)
{
    $coloridAndIndex = explode(':', $idAndIndex);
    $colorid = 0;
    $indexid = 0;
    foreach ($coloridAndIndex as $key => $data) {
        if ($key == 0) {
            $colorid = $data;
        } else {
            $indexid = $data;
        }
    }
    $color = Color::where('id', $colorid)->first();
    foreach (json_decode($color->name) as $key => $colors) {
        if ($key == $indexid) {
            echo $colors;
        }
    }
    function customerId(){
        $customerId = Session::get('customer_id');
        $customer = Customer::where('id', $customerId)->first();
        return $customer;
    }
}

?>
