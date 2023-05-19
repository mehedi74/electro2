<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Shipping;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

   public function index(){
       return view('website.checkout.index');
   }
//   public function placeOrder(Request $req){
//        Payment::placeOrder($req);
//        return back()->with('msg','Congrats! Your Order Places Successfully');
//    }

}
