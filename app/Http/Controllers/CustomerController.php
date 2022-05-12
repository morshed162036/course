<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customerRegistration');
    }
    public function store(Request $request){
        echo"<pre>";
        print_r($request->all());
        //Insert query
        $curtomer = new Customer;
        $curtomer->name = $request['name'];
        $curtomer->email = $request['email'];
        $curtomer->password = md5($request['password']);
        $curtomer->state = $request['state'];
        $curtomer->country = $request['city'];
        $curtomer->address = $request['address'];
        $curtomer->gender= $request['gender'];
        $curtomer->dob = $request['dob'];
        $curtomer->save();
        return redirect('/customer/view');
    }
    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
}
