<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use AuthenticatesUsers;

class SuperAdminLoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:superadmin');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('auth.superadmin-login');
    }

    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, 
        [
            'username' => 'required|min:5',
            'password' =>'required|min:6'
        ]);

        //attempt to log user in
        if(Auth::guard('superadmin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
        {
            //if succesfull then redirect to intended location
            return redirect()->intended(route('superadmin.dashboard'));
        }
        

        //unsuccesfull redirect back with form data
        return redirect()->back()->withInput($request->only('username','remember'));
    }
}
