<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard(){

  return view('backend.layouts.dashboard',);
  }



public function tenant(){
    return view('backend.layouts.tenant');
}
        // public function create(Request $request){
        //   dd($request->all());

        // }
        // public function create(Request $request){
        //     dd($request->all());
        // }
    }


