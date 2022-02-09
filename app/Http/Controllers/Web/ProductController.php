<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    //

    public function iglCollection() {
        return view('front_end.igl-collect');
    }

    public function stekCollection() {
        return view('front_end.stek-collect');
    }
}
