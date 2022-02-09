<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class OfferControlelr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $page = collect([
            'title' => 'Add Offers',
            'name' => 'Offers'
          ]);
  
     $offers = Offer::orderBy('sort_order','ASC')->get();
     return view('backend.offers.index',compact('page','offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $page = collect([
            'title' => 'Add Offers',
            'name' => 'Offers'
          ]);

        return view('backend.offers.create',compact('page'));
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

        $this->validate($request, [
            'title' => 'required|unique:offers',
            'description' => 'required',
            'upload_image' => 'required',
            'price' => 'required',
            'date_input' => 'required'
        ],
  
        );


        if($request->hasFile('upload_image')) {
            $fileName = time().'_offer_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = 'No Image';
             $fileName = 'No Image';
        }

        $offer = new Offer();

        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->image = $filePath;
        $offer->price = $request->price;
        $offer->validation = $request->date_input;
        $offer->slug =  Str::slug($request->title);
        $offer->status = $request->status;
        $offer->sort_order = $request->sort_order;
        if($offer->save()) {

            // return 2;
           return back()->with('success','Successfully Created');
        }   else {
              return back()->with('failure','Sorry Some Error');
        }
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

        $offer =Offer::find($id);


 
        $page = collect([
            'title' => 'Edit Offers',
            'name' => 'Offers'
          ]);

        return view('backend.offers.edit',compact('page','offer'));
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

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            // 'upload_image' => 'required',
            'price' => 'required',
            'date_input' => 'required'
        ],
  
        );


        if($request->hasFile('upload_image')) {
            $fileName = time().'_offer_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = $request->current_image;
             $fileName = 'No Image';
        }

        $offer = Offer::find($id);

        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->image = $filePath;
        $offer->price = $request->price;
        $offer->validation = $request->date_input;
      //  $offer->slug =  Str::slug($request->title);
        $offer->status = $request->status;
        $offer->sort_order = $request->sort_order;
        if($offer->save()) {

            // return 2;
           return back()->with('success','Successfully Updated');
        }   else {
              return back()->with('failure','Sorry Some Error');
        }
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

        $delete  = Offer::find($id);

        if($delete->delete()) {

            // return 2;
           return back()->with('success','Successfully Deleted');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
