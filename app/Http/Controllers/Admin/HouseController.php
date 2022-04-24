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

        $filename = null;
        if($request->hasFile('image'))
        {
            $file= $request->file('image');
            $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/home', $filename);
        }
        // dd('fhbdhbv');
        // dd($request->all());
        //insert into house table
        House::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$filename,
            'address'=>$request->address

        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
          House::find($id)->delete();
          return redirect()->back();
    }
                public function HouseEdit($id)
           {
              $house= House::find($id);
             return view('backend.layouts.house-edit', compact('house'));
              }
                public function HouseUpdate(Request $request,$id)
           {
              $house=House::find($id);
              $house->update([
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address
    
            ]);
             return redirect()->route('house');
              }
    
               public function HouseDetails($id)
               {
            $house=House::find($id);
            return view('backend.layouts.house-details',compact('house'));
    
        }
    

    }
