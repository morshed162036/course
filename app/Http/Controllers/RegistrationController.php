<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function register( Request $request){

        $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'password'=>'required|confirmed',
                'password_confirmation'=> 'required'
                //if we used confirmed condition then must be used 'password_confirmation' as a name. if we use custom name with out using 'password_confirmation' then used 'same:password'.
                //'password'=>'required',
                //'password_confirm'=> 'required|same:password'
            ]
        );

        echo"<pre>";
        print_r($request->all());
    }
}
