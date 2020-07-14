<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admins');
	}

    public function loginForm() {
    	return view('auth.admin');
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
    	if(Auth::guard('admins')->attempt($credentials,$request->remember)){
    		//If Success Redirect prev. link
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	//if Unsuccess Redirect back with error
    	return redirect()->back()->withInput($request->only('email','remember'));

    }
}
