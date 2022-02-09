<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //


    public function cars(Request $request) {
        $prices = Price::where('package_id','=',$request->id)->get();
        return response()->json(['success'=>$prices]);

    }
}
