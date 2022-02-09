<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
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
             'title' => 'Add New',
             'name' => 'Category'
            ]);

        $categories = Category::orderBy('id','desc')->get();
        return view('backend.category.index',compact('categories','page'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         $fields = collect([
            [

                'label' => 'Category Name',
                'name' => 'category_name',
                'icon' => true,
                'icon_name' => 'box',
                'type' => 'text',
                'validate' =>  true

            ],
          

        ]
          );
          $page = collect([
              'title' => 'Add Category',
              'name' => 'Category'
            ]);

        return view('backend.category.create',compact('fields','page'));
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
            'input_category_name' => 'required',
        ],
        [
            'input_category_name.required'=> 'Category Name is Required', // custom message


           ]
        );

      $category = new Category();

      $category->name = $request->input_category_name;

      if($category->save()) {

        // return 2;
       return back()->with('success','Successfully Created');
    }else {
          return back()->with('failure','Sorry Some Error');
    }


    // if(array_key_exists('attachment',$_FILES)) {
    //     $img_name = $_FILES['attachment']['name'];
    //     $upload =   tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['attachment']['name']));


    //     $uploadFile = $_SERVER['DOCUMENT_ROOT'].'upload/'.$img_name;
    //     if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $uploadFile)){

    //     }
    // }



        // return $request->all();
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

         $id = $id;


         $category = Category::find($id);
        $fields = collect([
            [

                'label' => 'Category Name',
                'name' => 'category_name',
                'icon' => true,
                'icon_name' => 'box',
                'type' => 'text',
                'validate' =>  true,
                'value' => $category->name

            ],

        ]
          );


          $page = collect([
            'title' => 'Edit Category',
            'name' => 'Category'
          ]);

        return view('backend.category.edit',compact('fields','category','page'));


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
            'input_category_name' => 'required',
        ],
        [
            'input_category_name.required'=> 'Category Name is Required', // custom message


           ]
        );

      $category = Category::find($id);

      $category->name = $request->input_category_name;

      if($category->save()) {

        // return 2;
       return back()->with('success','Successfully Updated');
    }else {
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

        $delete  = Category::find($id);

        if($delete->delete()) {

            // return 2;
           return back()->with('success','Successfully Created');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
