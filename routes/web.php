<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo', function(){
//     echo "Hello world";
// });
// Route::get('/demo', function(){
//     return view('demo');
// });
// Route::get('/demo/{name}', function($name){
//     return view('demo')->with($name);
// });
// Route::get('/demo/{name}/{id?}', function($name,$id=null){
//     $data = compact('name','id');
//     return view('demo')->with($data);
// });
// Route::post('/test', function(){
//     echo "testing the route";
// });
// Route::put('users/{id}', function($id){});
// Route::patch('users/{id}', function($id){});
// Route::delete('users/{id}', function($id){});
// Route::any('users/{id}', function($id){}); // it only provide by laravel


// Route::get('/{name?}', function ($name=null) {
//     $demo = "<h2>this is for test</h2>";
//     $data = compact('name','demo');
//     return view('home')->with($data);
// });

// Layout section

// Route::get('/', function(){
//     return view('homelayout');
// });
// Route::get('/about', function(){
//     return view('about');
// });

//👍 3 types of Controller 

// Basic controller
// 2 type syntex
// Route::get('/',[DemoController::class,'index']);
// Route::get('/about','App\Http\Controllers\DemoController@about');

// // SingleAction controller
// Route::get('/contact', SingleController::class); //it's only use for single function or action.

// //Resource controller
// Route::resource('/user', ResourceController::class);

//👍 form controller

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

// model
// Route::get("/customer",function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });
Route::get('/customer/create', [CustomerController::class,"index"])->name('customer.create');
Route::post('/customer/store', [CustomerController::class,"store"]);
Route::get('/customer', [CustomerController::class,"view"]);
Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');

//Softdelete

Route::get('/customer/trash', [CustomerController::class,"trash"])->name('customer.trash');

Route::get('/customer/forceDelete/{id}', [CustomerController::class,'forceDelete'])->name('customer.forceDelete');
Route::get('/customer/restore/{id}', [CustomerController::class,'restore'])->name('customer.restore');

Route::get("/",function(){
    return view('index');
});

// session

Route::get('get-all-session',function(){
    $session = session()->all();
    p($session);
});

// Route::get('set-session', function(){
//     session()->put('user_name','morshed');
//     return redirect('get-all-session');
// });
Route::get('set-session', function(Request $request){
    $request->session()->put('user_name','morshed');
    $request->session()->put('user_id','123');
    $request->session()->flash('status','Success');
    
    return redirect('get-all-session');
});

Route::get('distroy-session',function(){
    session()->forget(['user_name','user_id']);
    //session()->forget('user_id');
    return redirect('get-all-session');

});