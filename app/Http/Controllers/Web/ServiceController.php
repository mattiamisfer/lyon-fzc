<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //


    public function services($id) {


         $packages = Package::with(['price'])->where('category_id','=',$id)->get();

         


        return view('front_end.services',compact('packages'));
    }
}
