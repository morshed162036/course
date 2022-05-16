<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $url = url('/customer');
        $title = 'Customer registration';
        $customer = null;
        $data = compact('url','title','customer');
        return view('customerRegistration')->with($data);
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
        return redirect('/customer');
    }
    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function trash(){
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }
    public function delete($id){
        //type-1
        // $customer = Customer::find($id)->delete();
        //Customer::find($id)->delete();
        //return redirect()->back();

        //type-2 : runtime error handel
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');

    }
    public function restore($id){
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer');
    }
    public function forceDelete($id){
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect('customer/trash');
    }

    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customer');
        }
        else{
            $url = url('customer/update/')."/".$id;
            $title = "Update customer";
            $data = compact('customer','url','title');
            return view('customerRegistration')->with($data);
        }
    }
    public function update($id, Request $request){
        $curtomer = Customer::find($id);
        $curtomer->name = $request['name'];
        $curtomer->email = $request['email'];
        $curtomer->state = $request['state'];
        $curtomer->country = $request['city'];
        $curtomer->address = $request['address'];
        $curtomer->gender= $request['gender'];
        $curtomer->dob = $request['dob'];
        $curtomer->save();
        return redirect('/customer');
    }
}

