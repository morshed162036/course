<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;

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
Route::get('/customer/create', [CustomerController::class,"index"]);
Route::post('/customer/store', [CustomerController::class,"store"]);
Route::get('/customer', [CustomerController::class,"view"]);

Route::get("/",function(){
    return view('index');
});