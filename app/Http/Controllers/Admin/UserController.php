<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function loginForm()
     {

        return view('backend.layouts.login');


     }

     public function dologin(Request $request)
     {

        // dd($request->all());
        $request->validate([

            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        $loginData=$request->only('email','password');

        if(Auth::attempt($loginData))
        {

            return redirect()->route('dashboard')->with('success','User Login Success.');
        }

        return back()->withErrors([

               'email'=>'Invalid Credentials.',


        ]);

       }

        public function logoutForm()
        {

            Auth::logout();
            return redirect()->route('admin.login')->with('success',' Logout Successful.');
        }
    }






