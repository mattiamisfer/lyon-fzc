<?php

namespace App\Http\Controllers;

use App\Mail\CheckoutMail;
use App\Models\Checkout;
use App\Models\Homam;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $homams  = Homam::all();

        return view('web.home',compact('homams'));
    }


    public function horoscope() {
        return view('web.horoscope');
    }


    public function about() {
        return view('web.about');
    }
    public function lighting() {
        return view('web.lighting');
    }

    public function food_products() {
        return view('web.food-products');
    }
    public function contact() {
        return view('web.contact');
    }
    public function metal_fabrication_products() {
        return view('web.metal-fabrications-products');
    }
    public function offers() {

          $offers = Offer::
        where('status','=','enable')

        ->orderBy('sort_order','ASC')->get();
        return view('web.offers',compact('offers'));
    }


    public function checkout($id,$slug){

        $offer = Offer::find($id);
        return view('web.checkout',compact('offer'));

    }

    public function checkout_post(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required'
        ],
  
        );

       
        
        $checkout = new Checkout();

        $checkout->name =$request->name;
        $checkout->offer_id =$request->offer_id;
        $checkout->email =$request->email;
        $checkout->mobile =$request->mobile;
        $checkout->quantity =$request->quantity;
        $checkout->address =$request->address;

 


        Mail::to('john.doe@gmail.com')->send(new CheckoutMail($checkout));

        
        if($checkout->save()) {

            // return 2;
           return back()->with('success','Successfully Checkout');
        }   else {
              return back()->with('failure','Sorry Some Error');
        }
    }



    public function search(Request $request) {

        if(!empty($request->search)) {
         // DB::enableQueryLog();
             $offers = Offer::where('title', 'like', '%' .  $request->search. '%')->get();
             return view('web.search',compact('offers'));
       // return    $query = DB::getQueryLog();
 
        }

    }

    public function comming(){
        return view('web.comming-soon');
    }
    
}
