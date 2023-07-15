<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
// use App\Http\Controllers\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Backend Route

Route::get('admin_login',[AdminController::class,'ind']);
Route::get('/admin_master',[AdminController::class,'AdminMaster']);


//test appoinments
Route::get('forms.appointments',[AdminController::class,'appointments']);
//Route::get('forms.result',[AdminController::class,'result']);
//search
Route::get('forms.result',[HomeController::class, 'search'])->name('web.search');

//delete
Route::delete('forms.appointments/{id}', [AdminController::class, 'destroy'])
  ->name('forms.appointments.destroy');

  
// Admin Dashboard
Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);
Route::post('//admin_dashboard',[AdminController::class,'show_dashboard']);

//edit
Route::get('forms.edit/{id}',[AdminController::class,'show']);
Route::post('forms.edit/{id}',[AdminController::class,'edit']);

//Frontend Route

/*Route::get('/', function () {
    return view('welcome');
}); */

// User Registration
Route::get('auth.register',[UserAuthController::class,'register'])->name('auth.register');
Route::post('auth.register',[UserAuthController::class,'register_view'])->name('auth.register');


// user login
Route::get('auth.login',[UserAuthController::class,'login'])->name('auth.login');
Route::post('login',[UserAuthController::class,'login_view'])->name('login');

// user logout
Route::get('logout', [UserAuthController::class,'logout']);

// user home view
 Route::get('auth.userView', [UserAuthController::class,'userView'])->name('auth.userView')->middleware(['verified']);
// Route::get('auth.userView', function () {
//   // Only verified users may access this route...
//   Route::get('auth.userView', [UserAuthController::class,'userView'])->name('auth.userView')
// })->middleware('verified');

// verification
Route::get('/email/verify', function(){
  return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


// Email verify
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect()->route('auth.userView');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resend Email Verification
Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();

  return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//guest home
Route::get('/', function () {
    return view('home');
});


// Form routes
Route::get('forms.test',[FormController::class,'test']);
// Route::get('forms.appoinments',[FormController::class,'appoinments']);
//Route::get('forms.edit',[FormController::class,'edit']);
Route::post('forms.test', [FormController::class, 'store'])->name('store');

 Route::resource('forms', FormController::class);
//Route::resource('forms', AdminController::class);
//Route::resource('forms', SuperAdminController::class);


