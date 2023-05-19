<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

session_start();


class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.login.login');
    }

    public function dashboard()
    {
        return view('admin.home.index');
    }

    public function showDashboard(Request $req)
    {
        $email = $req->a_email;
        $password = md5($req->a_password);
        $check = Admin::where('admin_email', $email)->where('admin_password', $password)->first();
        if ($check) {
            Session::put('admin_name', $check->admin_name);
            return redirect('/dashboard');
        } else {
            Session::put('msg', 'Invalid email or password');
            return redirect('/admin-login');
        }
    }

    public function logout()
    {
        Session::flash('name');
        return redirect('/admin-login');
    }
}
