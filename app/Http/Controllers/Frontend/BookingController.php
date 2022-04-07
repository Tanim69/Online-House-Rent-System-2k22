<?php

namespace App\Http\Controllers\Frontend;

use App\Models\House;
use App\Models\Booking;
use App\Models\Houseinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Bookingnotification;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function showhouse($id)
    {

         $house=Houseinfo::find($id);
        return view('frontend.layouts.show-house',compact('house'));



    }

    public function booking(Request $request)
    {

        $checkBook = Booking::where('house_id',$request->house_id)
                            ->exists();

        if(!$checkBook){
            $booking=Booking::create([

                'house_id'=>$request->house_id,
                'user_id'=>auth()->user()->id,
                'flat_price'=>$request->price,
                'bookingdate'=>$request->date,
                'emargencyContactnumber'=>$request->number,
                'bookingdetails'=>$request->details,
                 'status'=>1,
                 'flat_id'=>1,
                 'flat_name'=>1,

              ]);
              Mail::to(auth()->user()->email)->send(new Bookingnotification($booking));


              return redirect()->back()->with('message', 'Booking created Successfully');
        }else {
                return redirect()->back()->with('error', 'Already booked.');
            }



}

}
