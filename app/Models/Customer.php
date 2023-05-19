<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=['name','email','password','mobile','image','address'];

    static function addCustomer($req){
        $customer=new Customer();
        $customer['name']=$req->customer_name;
        $customer['email']=$req->customer_email;
        $customer['mobile']=$req->customer_phone;
        $customer['password']=$req->customer_password;
        $customer['address']=$req->customer_address;
        $customer->save();
    }
}
