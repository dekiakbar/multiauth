<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => ['logout']]);
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//validasi form login
    	$this->validate($request,[
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);

    	//percobaan login
    	//
    	if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) 
        {
    		//login berhasil dan redirect halaman
    		return redirect()->intended(route('admin.dashboard'));
    	} 

    	// gagal login dan redirect
    	return redirect()->back()->withInput($request->only('email','remember'));
    }

     /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
