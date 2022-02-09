<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class PakcageController extends Controller
{
    //

    public function index() {

         $plans = Plans::orderBy('id', 'ASC')->get();

        return view('front_end.package',compact('plans'));
    }
}
