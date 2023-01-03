<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use Session;

Session_start();

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $forms = Form::latest()->paginate(5);
    //     return view('forms.appoinments',compact('forms'));
            
    // }
    
    
    public function test()
{
    return view("forms.test");
}
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function create()
    {
        //
        return view('forms.test');
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 
    {
        
        $this->validate($request,[
            'NID_no' => 'required',
            'names' => 'required|max:255',
            'birthdate' => 'required|date',
            'phoneN' => 'required|numeric',
            'mailaddress' => 'required|email|max:255',
            'BloodG' => 'required|',
            'sex' => 'required|',
            'address' => 'required|max:255',
            'Wardno' => 'required|numeric',
            'veksinate' => 'required',
            'Vname' => 'required',
            'priordiagnosis' => 'required',
            'status '=>'পরীক্ষার সময়সূচী শীঘ্রই বলা হবে'
            
        ]); 

       /* $forms = new form();
        $forms->NID_no=$request->NID_no;
        $forms->names=$request->names;
        $forms->birthdate=$request->birthdate;
        $forms->phoneN=$request->phoneN;
        $forms->mailaddress=$request->mailaddress;
        $forms->sex=$request->sex;
        $forms->address=$request->address;
        $forms->Wardno=$request->Wardno;
        $forms->veksinate=$request->veksinate;
        $forms->Vname=$request->Vname;
        $forms->priordiagnosis=$request->priordiagnosis;
        $forms->status='পরীক্ষার সময়সূচী শীঘ্রই বলা হবে';
      */
        //$validated->status='পরীক্ষার তারিখ শীঘ্রই বলা হবে';

        Form::create($request->all());
        
        Session::flash('message', 'COVID 19 পরীক্ষার নিবন্ধন সফল হয়েছে !!');
        return Redirect::to('forms.test');
        //return redirect()->route('test');
        //->with('message','Registration for Covid Test is Successful!');
 
    }

    
    
     
    

}
