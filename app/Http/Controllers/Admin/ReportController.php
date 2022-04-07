<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function report()
    {
        $allbooking=[];
        if(isset($_GET['date']))
        {
            $date='date'('Y-m-d',strtotime($_GET['date']));
            // dd($date);

            $allbooking=Booking::whereDate('bookingdate',$date)->get();
            

        }



        return view('backend.layouts.reports.list',compact('allbooking'));
    }
}
