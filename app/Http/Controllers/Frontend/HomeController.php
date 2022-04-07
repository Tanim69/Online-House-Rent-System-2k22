<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Houseinfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function website(){

        $all_houseinfo=Houseinfo::all();


        return view('frontend.layouts.home',compact('all_houseinfo'));
     }
}
