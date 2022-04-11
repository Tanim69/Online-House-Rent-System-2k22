<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;


class TenantController extends Controller
{

    public function list(){
        $tenants=Tenant::all();
        return view('backend.layouts.tenant', compact('tenants'));

    }
    public function create(Request $request)
    {
    
        // dd($request->all());

        $filename = null;
                    if($request->hasFile('image'))
                    {
                        $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads/home', $filename);
                    }
        //insert into tenant table
        Tenant::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'address'=>$request->address,
            'occupation'=>$request->occupation,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'image'=>$filename
        ]);
        return redirect()->back();
    }

        public function delete($id)
{
Tenant::find($id)->delete();
return redirect()->back();
}

}
