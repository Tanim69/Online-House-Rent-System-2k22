<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Houseinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function paymenthouse($id)
    {
        $house=Houseinfo::find($id);
       return view('frontend.layouts.payment',compact('house'));
    }

    public function payment(Request $request)
     {
    //  dd($request->all());
        Payment::create([
            'house_id'=>$request->house_id,
            'user_id'=>auth()->user()->id,
            'flat_price'=>$request->amount,
            'paymentmethod'=>$request->method,
            'bookingdate'=>$request->date,
            'transaction_id'=>$request->transactionid,



        ]);

        return redirect()->back()->with('message','Payment Done');
    }
}

