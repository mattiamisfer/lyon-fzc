<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Archanai;
use App\Models\Category;
use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Illuminate\Support\Str;
class ArchanaiController extends Controller
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
          'title' => 'Add Archanai',
          'name' => 'Archanai'
        ]);

   $archanais = Archanai::orderBy('sort_order','ASC')->get();
   return view('backend.archanai.index',compact('page','archanais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        
        $categorylist = array();
        $categorylist[''] = 'Choose Category' ;  
          $categories = Category::select('id','name')->get();
          foreach($categories as $category) {
            $categorylist[$category->id] = $category->name ;  
          

          }

 
        $page = collect([
            'title' => 'Add Archanai',
            'name' => 'Archanai'
          ]);

        return view('backend.archanai.create',compact('page','categorylist'));
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
            'title' => 'required|unique:archanais',
            'category_id' => 'required',
            'upload_image' => 'required',
            'price' => 'required'
        ],
  
        );


        $Archanai = new Archanai();
        if($request->hasFile('upload_image')) {
            $fileName = time().'_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = 'No Image';
             $fileName = 'No Image';
        }
       $Archanai->title = $request->title;
       $Archanai->category_id = $request->category_id;
        $Archanai->image = '/storage/' . $filePath;
        $Archanai->slug =  Str::slug($request->title);
        $Archanai->sort_order = $request->sort_order;
        $Archanai->status = $request->status;
        $Archanai->price = $request->price;
        if($Archanai->save()) {

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

        $categorylist = array();
        $categorylist[''] = 'Choose Category' ;  
          $categories = Category::select('id','name')->get();
          foreach($categories as $category) {
            $categorylist[$category->id] = $category->name ;  
          

          }

   $archanai =Archanai::find($id);


 
        $page = collect([
            'title' => 'Edit Archanai',
            'name' => 'Archanai'
          ]);

        return view('backend.archanai.edit',compact('page','categorylist','archanai'));
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
          'category_id' => 'required',
          
      ],);


        $Archanai = Archanai::find($id);
        if($request->hasFile('upload_image')) {
            $fileName = time().'_'.$request->upload_image->getClientOriginalName();
            $filePath = $request->file('upload_image')->storeAs('uploads', $fileName, 'public');
          //  $fileModel->name = time().'_'.$request->file->getClientOriginalName();
           
           
        } else {
             $filePath = $request->current_image;
             
        }
       $Archanai->title = $request->title;
       $Archanai->category_id = $request->category_id;
        $Archanai->image = '/storage/' . $filePath;
        $Archanai->slug =  Str::slug($request->title);
        $Archanai->sort_order = $request->sort_order;
        $Archanai->status = $request->status;
        $Archanai->price = $request->price;
        if($Archanai->save()) {

            // return 2;
           return back()->with('success','Successfully Updated!');
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

        $delete  = Archanai::find($id);

        if($delete->delete()) {

            // return 2;
           return back()->with('success','Successfully Deleted');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
