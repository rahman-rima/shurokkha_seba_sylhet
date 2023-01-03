<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\FormController;

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

//Route::get('forms.appoinments/{id}',[AdminController::class,'destroy']);
//Route::get('forms/{id}',[AdminController::class, 'destroy']);
  //->name('destroy');
  //Route::resource('appoinments/{id}', FormController::class);
//   Route::delete('appoinments/{id}', 'FormController@destroy')
//   ->name('appoinments.destroy');

// Route::get('forms.appointments',[AdminController::class,'appointments'])->name('appointments');

//test appoinments
Route::get('forms.appointments',[AdminController::class,'appointments']);
//Route::get('forms.result',[AdminController::class,'result']);
//search
Route::get('forms.result',[HomeController::class, 'search'])->name('web.search');

//delete
Route::delete('forms.appointments/{id}', [AdminController::class, 'destroy'])
  ->name('forms.appointments.destroy');

  

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

Route::get('/', function () {
    return view('home');
});

/*
Route::get('index', function () {
    return view('index');
});*/

/*
Route::get('result', function () {
    return view('result');
});*/

//Route::post('forms.appointments', [AdminController::class, 'update'])->name('forms.appointments.update');

Route::get('forms.test',[FormController::class,'test']);
// Route::get('forms.appoinments',[FormController::class,'appoinments']);
//Route::get('forms.edit',[FormController::class,'edit']);
Route::post('forms.test', [FormController::class, 'store'])->name('store');

 Route::resource('forms', FormController::class);
//Route::resource('forms', AdminController::class);
//Route::resource('forms', SuperAdminController::class);



//Route::post('forms.test', [FormController::class, 'index'])->name('index');

//Route::get('url',[cont_name::class,'function_name']);

//Route::get("home",[HomeController::class,'index']);

//Route::resource('home', HomeController::class);

//Route::resource('project', HomeController::class);