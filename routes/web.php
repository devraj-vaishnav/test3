<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CustomerController;

use App\Models\Customers;

Route::get('client',[CustomerController::class,'form']);
Route::post('client',[CustomerController::class,'store']);






Route::get('/customers',function(){
    $customers= Customers::all();
    echo "<pre>";
    print_r($customers->toarray());
});


Route::get('register',[FormController::class,'form']);
Route::post('register',[FormController::class,'register']);



Route::get('userdata',[FormController::class,'userdata']);

Route::get('data/{a}/{b}',[UserController::class,'datainput']);
Route::get('userdetail',[UserController::class,'UserDetail']);

// Route::get('data',[userController::class,'datashow']);
Route::get('home',[DemoController::class,'home'])->name('home-page');
// Route::get('form',[DemoController::class,'form']);
Route::get('contact-page',[DemoController::class,'contact']);
// Route::get('show/{x}/{y}',[DemoController::class,'show']);

Route::get('/show',function(){
    return view('userdata');
});
Route::get('index', function(){
    return view('welcome');
});
Route::get('sum/{a}/{b}', function($d, $e){
   echo $d + $e;
});
Route::get('home-page', [TestController::class, 'home']);
Route::get('user-add/{a}/{b}', [TestController::class, 'userAdd']);
Route::get('user-list', [TestController::class, 'userList'])->name('allUser');
Route::get('user-add-page', [TestController::class, 'userAddPage'])->name('addUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
