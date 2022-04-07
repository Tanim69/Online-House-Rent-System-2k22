<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function paymentlist()
    {

     $allpayment=Payment::all();
    return view('backend.layouts.payment.list',compact('allpayment'));

    }
}
