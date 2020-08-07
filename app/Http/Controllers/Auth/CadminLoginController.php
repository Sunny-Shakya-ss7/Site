<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class CadminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:cadmin')->except('logout');
	}

    public function loginForm() {
    	return view('users.clogin');
    }

    public function login(Request $request){

    	//Validate the request
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);

    	//Login attempt
    	$credentials =[
    		'email' => $request->email,
    		'password' => $request->password
    	];
    	if(Auth::guard('cadmin')->attempt($credentials,$request->remember)){
    		//If Success Redirect prev. link
    		return redirect('/cadmin');
    	}
    	//if Unsuccess Redirect back with error
    	return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
        Auth::guard('cadmin')->logout();
        return redirect('/');
    }
}
