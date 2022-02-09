<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomamController extends Controller
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
            'title' => 'Add Homam & Parikaram',
            'name' => 'Homam & Parikaram'
          ]);
  
     $homams = Homam::orderBy('sort_order','ASC')->get();
     return view('backend.homam.index',compact('page','homams'));
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
            'title' => 'Add Homam & Parikaram',
            'name' => 'Homam & Parikaram'
          ]);

        return view('backend.homam.create',compact('page'));
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

    //    return $request->all();

        $this->validate($request, [
            'title' => 'required|unique:homams',
            
            'upload_image' => 'required',
            'price' => 'required'
        ],
  
        );


        $homam = new Homam();
        if($request->hasFile('upload_image')) {
            $fileName = time().'_homam-parikaram_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = 'No Image';
             $fileName = 'No Image';
        }
       $homam->title = $request->title;
      // $homam->category_id = $request->category_id;
        $homam->image = '/storage/' . $filePath;
        $homam->slug =  Str::slug($request->title);
        $homam->sort_order = $request->sort_order;
        $homam->status = $request->status;
        $homam->price = $request->price;
        if($homam->save()) {

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

        $homam =Homam::find($id);


 
        $page = collect([
            'title' => 'Edit Homam & Parikaram',
            'name' => 'Homam & Parikaram'
          ]);

        return view('backend.homam.edit',compact('page','homam'));
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
            
        
            'price' => 'required'
        ],
  
        );


        $homam = Homam::find($id);
        if($request->hasFile('upload_image')) {
            $fileName = time().'_homam-parikaram_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = $request->current_image;
             $fileName = 'No Image';
        }
       $homam->title = $request->title;
      // $homam->category_id = $request->category_id;
        $homam->image = '/storage/' . $filePath;
        $homam->slug =  Str::slug($request->title);
        $homam->sort_order = $request->sort_order;
        $homam->status = $request->status;
        $homam->price = $request->price;
        if($homam->save()) {

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
        $delete  = Homam::find($id);

        if($delete->delete()) {

            // return 2;
           return back()->with('success','Successfully Deleted');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
