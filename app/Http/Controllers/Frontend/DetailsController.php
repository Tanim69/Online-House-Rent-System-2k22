<?php

namespace App\Http\Controllers\frontend;

use App\Models\Houseinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
    public function detailshouse($id)

    {
        $house=Houseinfo::find($id);
         return view('frontend.layouts.details-house',compact('house'));
    }
}
