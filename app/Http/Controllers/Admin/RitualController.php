<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ritual;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class RitualController extends Controller
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
            'title' => 'Add Rituals For Ancestors',
            'name' => 'Rituals For Ancestors'
          ]);
  
     $rituals = Ritual::orderBy('sort_order','ASC')->get();
     return view('backend.ritual.index',compact('page','rituals'));
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
            'title' => 'Add Rituals For Ancestors',
            'name' => 'Rituals For Ancestors'
          ]);

        return view('backend.ritual.create',compact('page'));
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
            'title' => 'required|unique:vasthus',
            
            'upload_image' => 'required',
            'price' => 'required'
        ],
  
        );


        $vasthu = new Ritual();
        if($request->hasFile('upload_image')) {
            $fileName = time().'_ritual_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = 'No Image';
             $fileName = 'No Image';
        }
       $vasthu->title = $request->title;
      // $homam->category_id = $request->category_id;
        $vasthu->image = '/storage/' . $filePath;
        $vasthu->slug =  Str::slug($request->title);
        $vasthu->sort_order = $request->sort_order;
        $vasthu->status = $request->status;
        $vasthu->price = $request->price;
        if($vasthu->save()) {

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

        $ritual =Ritual::find($id);


 
        $page = collect([
            'title' => 'Edit Rituals For Ancestors',
            'name' => 'Rituals For Ancestors'
          ]);

        return view('backend.ritual.edit',compact('page','ritual'));
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


        $vasthu = Ritual::find($id);
        if($request->hasFile('upload_image')) {
            $fileName = time().'_ritual_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = $request->current_image;
             $fileName = 'No Image';
        }
       $vasthu->title = $request->title;
      // $homam->category_id = $request->category_id;
        $vasthu->image = '/storage/' . $filePath;
        $vasthu->slug =  Str::slug($request->title);
        $vasthu->sort_order = $request->sort_order;
        $vasthu->status = $request->status;
        $vasthu->price = $request->price;
        if($vasthu->save()) {

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
        $delete  = Ritual::find($id);

        if($delete->delete()) {

            // return 2;
           return back()->with('success','Successfully Deleted');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
