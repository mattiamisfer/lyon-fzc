<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use App\Models\Price;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    //

    public function options($id) {

     

           $options = Price::where('package_id','=',$id)->get();

         return view('backend.option.index',compact('options'));
        

    }

    public function options_add($id) {

        $fields = collect([
            [

                'label' => 'Name',
                'name' => 'name',
                'icon' => true,
                'icon_name' => 'box',
                'type' => 'text',
                'validate' =>  true

            ],
            [

                'label' => 'Price',
                'name' => 'price',
                'icon' => true,
                'icon_name' => 'box',
          
                'type' => 'text',
                'validate' =>  true

            ], ]);

            return view('backend.option.create',compact('fields'));
            

    }


    public function store(Request $request) {

        $this->validate($request, [
            'input_name' => 'required',
            'input_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ],
        [
            'input_name.required'=> 'Name is Required', // custom message
            'input_price.required'=> 'Price is Required',

           ]
        );

        $option =  new Price();

        $option->name = $request->input_name;
        $option->price = $request->input_price;
        $option->package_id = $request->package_id;

        if($option->save()) {

            // return 2;
           return back()->with('success','Successfully Created');
        }else {
              return back()->with('failure','Sorry Some Error');
        }

    }


    public function edit($id) {
        $options = Price::find($id);
        $fields = collect([
            [

                'label' => 'Name',
                'name' => 'name',
                'icon' => true,
                'icon_name' => 'box',
                'type' => 'text',
                'validate' =>  true,
                'value' => $options->name

            ],
            [

                'label' => 'Price',
                'name' => 'price',
                'icon' => true,
                'icon_name' => 'box',
          
                'type' => 'text',
                'validate' =>  true,
                'value' => $options->price
            ], ]);


            return view('backend.option.edit',compact('fields','options'));


         
    }


    public function update($id,Request $request) {

        $this->validate($request, [
            'input_name' => 'required',
            'input_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ],
        [
            'input_name.required'=> 'Name is Required', // custom message
            'input_price.required'=> 'Price is Required',

           ]
        );

        $option =  Price::find($id);

        $option->name = $request->input_name;
        $option->price = $request->input_price;
 

        if($option->save()) {

            // return 2;
           return back()->with('success','Updated Created');
        }else {
              return back()->with('failure','Sorry Some Error');
        }


    }



    public function destroy($id) {
        $delete  = Price::find($id);

        if($delete->delete()) {

            // return 2;
           return back()->with('success','Successfully Deleted');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
