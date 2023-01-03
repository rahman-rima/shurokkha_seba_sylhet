<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use  App\Models\Admin;
use  App\Models\Form;
//use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;


use Session;

Session_start();


class AdminController extends Controller
{
    //
    public function ind()
    {
        return view("admin_login");
    }

    public function AdminMaster(){
        return view("admin_master");
    }
    
    public function show_dashboard(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_id',$result->admin_id);
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('forms.appointments')->with('message', 'Welcome Admin!');
        }else{
            Session::put('message','Email or Password is invalid');
            return Redirect::to('admin_login');
        }
        
        
    
    }
    
    public function appointments(){
        $form = DB::table('forms')->get();
        //  dd('okkhfhjhgjs');

        return view('forms.appointments',['form'=> $form]);

        
        
    }
    public function show($id) {
        $status = DB::select('select * from forms where id = ?',[$id]);
        return view('forms.edit',['status'=>$status]);
     }

    public function edit(Request $request,$id) {
        $status = $request->input('status');
        DB::update('update forms set status = ? where id = ?',[$status,$id]);
        echo "Record updated successfully.<br/>";
        return redirect::to('forms.appointments');
     }
    

    // public function edit(){

    // }
    public function destroy($id){

	;

          $form = Form::find($id);
          if ($form != null) {
            $form->delete();
            return back();
        }
    
        return back();
             
          
	}

    
   
    }
