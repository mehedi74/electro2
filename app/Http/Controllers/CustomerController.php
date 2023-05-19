<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

session_start();

class CustomerController extends Controller
{
    public function login()
    {
        return view('website.customer.login');
    }

    public function register()
    {
        return view('website.customer.register');
    }

    public function store(Request $req)
    {
        Customer::addCustomer($req);
        return redirect('/customer/login')->with('msg', 'Congrats Registration successful..login to your account');
    }

    public function check(Request $req)
    {
        $check = Customer::where('email', $req->customer_email)->where('password', $req->customer_password)->first();
        if ($check) {
            Session::put('customer_id', $check->id);
            $item = \Cart::getContent();
            $data = count($item);
            if ($data == 0) {
                return redirect('/');
            } else {
                return redirect('/product/checkout/index');
            }

        } else {
            Session::put('msg', 'Inavild name or password');
            return back();
        }
    }

    public function logout()
    {
        Session::flash('customer_id');
        \Cart::clear();
        return redirect('/');
    }
}
