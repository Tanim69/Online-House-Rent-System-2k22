<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showbooking()
    {
          $allbooking=Booking::with(['user','houseinfo'])->get();
        //   dd($allbooking);
        return view('backend.layouts.booking.list',compact('allbooking'));
    }

    public  function status($id, $status)
    {
        $booking = Booking::find($id);

        if($status === 'approved'){
            $booking->update(['status' => $status]);
            return redirect()->back()->with('success', 'Approved successfully');
        }else{
            $booking->update(['status' => $status]);
            return redirect()->back()->with('error', 'Rejected');
        }


    }
    



}
