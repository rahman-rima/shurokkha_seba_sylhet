<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
{
return view("forms.home");
}

public function bin()
{
return view("index");
}

public function search(Request $request){

       
    if( isset($_GET['query']) && strlen($_GET['query']) > 1){

        $search_text = $_GET['query'];
        $form = DB::table('forms')->where('NID_no','LIKE','%'.$search_text.'%')->paginate(2);
        // $countries->appends($request->all());
        return view('forms.result',['form'=>$form]);
        
    }else{
         return view('forms.result');
    }
   
}
}
