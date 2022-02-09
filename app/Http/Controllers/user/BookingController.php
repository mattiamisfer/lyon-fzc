<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Price;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $packages = Package::with(['price'])->get();


        return view('user.book',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //return $request->all();

        // $booking = new Booking();
        // $booking->user_id = Auth::user()->id;
        // $booking->slot_date = $request->start_date;
        // $booking->slot_time = $request->start_time;
        // $booking->package_id = $request->package;
        // $booking->price_id  = $request->type;
     //   DB::enableQueryLog();

         $ifbooking = Booking::whereDate('slot_date','=', Carbon::parse($request->start_date)->format('Y-m-d'))->
         where('slot_time','=',$request->start_time)->where('package_id','=',$request->package)->count();
         
   // $query =  DB::getQueryLog();

   if($ifbooking == config('app.value')) {
       return response()->json(['status'=>1,'message'=> 'Sorry Slot Already Taken'],200);
   } else {
    $booking = new Booking();
              $booking->user_id = 1;
              $booking->slot_date = Carbon::parse($request->start_date)->format('Y-m-d');
              $booking->slot_time =  $request->start_time;
              $booking->package_id = $request->package;
              $booking->price_id  = $request->type;
             if($booking->save()) {
                 
                return response()->json(['status'=>2,'message'=> 'Successfully Booked your Slot'],200);
             }else {
                   return response()->json(['status'=>3,'message'=> 'Sorry Some Error'],200);
             }
   }


              //  $query = DB::getQueryLog();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $prices = Price::where('package_id','=',$id)->get();
        return  $prices;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
