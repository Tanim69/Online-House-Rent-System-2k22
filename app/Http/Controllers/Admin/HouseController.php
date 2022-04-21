<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function list(){
        $houses=house::all();
        return view('backend.layouts.house', compact('houses'));

    }



    public function create(Request $request)
    {
        // dd('fhbdhbv');
        // dd($request->all());
        //insert into house table
        House::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$request->image,
            'address'=>$request->address,

        ]);
        return redirect()->back();
    }

public function delete($id)
{
house::find($id)->delete();
return redirect()->back();
}

}