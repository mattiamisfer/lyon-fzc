<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //





     public function index() {
         $categories = Category::with(['subcategory'])->get();

         return $categories;

         return view('layouts.app',compact('categories'));
     }
}
