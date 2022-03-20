<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use Redirect;
class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function loginCheck(Request $request)
    {
    	//return $request->all();
    	$credentials = ['email' => $request->email, 'password' => $request->password]; 
    	//print_r($credentials);
    	if(Auth::guard('user')->attempt($credentials)) {
    		Session::put('user',Auth::guard('user')->user());
    		return redirect()->intended('/dashboard');
    	} else {
    		return redirect('/login');
    	}
    }

    public function logout()
    {
    	Auth::guard('user')->logout();
    	Session::forget('user');
    	return view('/login');
    }
}
