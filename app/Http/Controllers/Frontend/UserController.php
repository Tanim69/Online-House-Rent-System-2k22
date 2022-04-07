<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function RegistrationForm()
    {
        // dd("ok");

        return view('frontend.layouts.registration');
    }
    public function register(Request $request)
    {
        // dd($request->all());
        // dd($request->file('image')->getClientOriginalExtension());
        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');

            if($file->isValid()){
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                // dd($filename);
                $file->storeAs('user',$filename);

        }


        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required',
            'nidnumber'=>'required',
            'phonenumber'=>'required',
            'occupation'=>'required',
            'image'=>'required',
            'password'=>'required|min:6',
            'role'=>'required',
            'bkashrocketnumber'=>'required'


        ]);

          User::create([
              'name'=>$request->name,
              'email'=>$request->email,
              'address'=>$request->address,
              'nidnumber'=>$request->nidnumber,
              'phonenumber'=>$request->phonenumber,
              'occupation'=>$request->occupation,
              'image'=>$filename,
              'password'=>bcrypt($request->password),
              'role'=>$request->role,
              'bkashrocketnumber'=>$request->bkashrocketnumber,


          ]);

          return redirect()->back()->with('success','User Registration Successful');
    }

}

    public function loginform()
    {

        // dd("ok");
        return view('frontend.layouts.login');
    }
    public function dologin(Request $request)
    {

    //    dd($request->all());
    $request->validate([

        'email'=>'required|email',
        'password'=>'required|min:6',

    ]);

    $loginData=$request->only('email','password');

    if(Auth::attempt($loginData))
    {

        return redirect()->route('website')->with('success','User Login Success.');
    }

    return back()->withErrors([

           'email'=>'Invalid Credentials.',


    ]);

   }

    public function logout()
    {

        Auth::logout();
        return redirect()->route('login.form')->with('success',' Logout Successful.');
    }
}
