<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

Session_start();

class SuperAdminController extends Controller
{
    //
    public function dashboard(){
        $this->AdminAuthCheck();
        return view("dashboard");
    }
    public function logout(){
        Session::flush();
        return redirect::to('admin_login');
    }
    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');
        if($admin_id)
        {
            return;
        }else{
            return redirect::to('admin_login')->send();
        }
    }
}
