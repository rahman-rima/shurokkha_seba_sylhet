<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\DB;


use Session;

Session_start();

class UserAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('auth.login');
    }
    public function login()
    {
        //
        return view('auth.login');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        return view('auth.register');
    }
   
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function login_view(Request $request){
        // user login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|password',
        ]);
        if(\Auth::attempt($request->only('email', 'password'))){
            return Redirect::to('auth.userView')->with('message', 'Welcome User!');
          }
          Session::put('message','Email or Password is invalid');
                   return Redirect::to('auth.login');
     }


    // public function login_view(Request $request){
    //     $user_email = $request->email;
    //     $user_password = $request->password;
    //     $result = User::where('email',$user_email)->where('password',$user_password)->first();
    //     if($result){
    //         // Session::put('admin_id',$result->admin_id);
    //         // Session::put('admin_name',$result->admin_name);
    //         return Redirect::to('auth.userView')->with('message', 'Welcome User!');
    //     }else{
    //         Session::put('message','Email or Password is invalid');
    //         return Redirect::to('auth.login');
    //     }
    // }

    public function userView()
    {
        //user view
        return view('auth.userView');
    }

    public function register_view(Request $request)
    {
        //user registration
        // dd($request->all());
        // validate
        $inputs = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
            'password_confirmation' =>'required'
      ]);

     $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>\Hash::make($request->password),

      ]);

    //   if(\Auth::attempt($request->only('email', 'password'))){
    //     return redirect('auth.userView');    
    //   }

      Auth::attempt([
        'email'=>$request->email,
        'password'=>$request->password,
      ]);
    
      event(new Registered($user));
      return redirect('auth.userView');
      
    //    Session::put('message','Please provide valid information');
    //    return Redirect::to('auth.register');
    }

   

    public function logout(){
        Session::flush();
        return redirect::to('/');
    }
    // public function logout()
    // {
    //     //logout
    //     \Session::flush();
    //     \Auth::logout();
    //     return redirect('/');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
}
