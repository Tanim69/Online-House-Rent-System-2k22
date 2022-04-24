<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Houseinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseinfoController extends Controller
{
    public function list(){

        $houseinfos=Houseinfo::all();
       return view('backend.layouts.houseinfo.list',compact('houseinfos'));
     }

    public function search(Request $request)
    {
        $search=$request->house_address;
        $search=$request->flat_price;
        if ($request->search){
            $houseinfos=Houseinfo::where('house_address','like','%'.$request->search.'%')
                                  ->orwhere('flat_price','like','%'.$request->search.'%')->get();

        }else
        {
            $houseinfos=Houseinfo::all();

        }

        return view('backend.layouts.houseinfo.list',compact('houseinfos'));

    }


    public function createinfo()
    {
        $houseinfos=Houseinfo::all();

        return view('frontend.layouts.houseinfo.create',compact('houseinfos'));
    }
    public function store(Request $request)
    {
        // dd($request->file('house_image')->getClientOriginalExtension());
        // // store image into local directory
        $filename='';
        if($request->hasFile('house_image'))
        {


            $file=$request->file('house_image');

            if($file->isValid()){
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                // dd($filename);
                $file->storeAs('house',$filename);





            }
        }


    

    //get a unique file name and store into database

    Houseinfo::create([
        'id'=>$request->id,
        'house_id'=>$request->house_id,
        'user_id'=>auth()->user()->id,
        'house_name'=>$request->house_name,
        'house_address'=>$request->house_address,
        'phone_number'=>$request->phone_number,
        'tolet_date'=>$request->tolet_date,
        'house_description'=>$request->house_description,
        'floor_description'=>$request->floor_description,
        'flat_description'=>$request->flat_description,
        'flat_name'=>$request->flat_name,
        'flat_size'=>$request->flat_size,
        'flat_price'=>$request->flat_price,
        'house_image'=>$filename,



    ]);

    return redirect()->route('houseinfo.list');

    }
public function delete($id)
{
Houseinfo::find($id)->delete();
return redirect()->back();
}

}
    