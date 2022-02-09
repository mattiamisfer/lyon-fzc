<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $plans =  Plans::all();

        return view('backend.plans.index',compact('plans'));
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

                'label' => 'Plan Name',
                'name' => 'plan_name',
                'icon' => true,
                'icon_name' => 'box',
                'type' => 'text',
                'validate' =>  true

            ],
            [

                'label' => 'Amount',
                'name' => 'amount',
                'icon' => true,
                'icon_name' => ' bx-money',
                'list' =>  null,
                'type' => 'text',
                'validate' =>  true

            ],
            [

                'label' => 'Validity',
                'name' => 'validity',
                'icon' => false,
                'icon_name' => 'box',

                'type' => 'select',
                'validate' =>  true,
                'list' => [
                    [
                        'id' => 1,
                        'name' => '1 month',
                        'validity' => '1 month'
                    ],
                    [
                        'id' => 2,
                        'name' => '2 month',
                        'validity' => '2 month'
                    ]
                ]

            ],
            [

                'label' => 'Description',
                'name' => 'description',
                'icon' => true,
                'icon_name' => 'box',

                'type' => 'textarea',
                'validate' =>  true

            ],


        ]
          );

          return view('backend.plans.create',compact('fields'));
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
            'input_plan_name' => 'required',
            'input_amount' => 'required|numeric|between:50,50000.99',
            'input_validity' => 'required',
            'input_description' => 'required',
        ],
        [
            'input_plan_name.required'=> 'Plan Name is Required', // custom message
            'input_amount.required'=> 'Amount is Required',
            'input_validity.required'=> 'Validity is Required',
            'input_description.required'=> 'Description is Required',
           ]
        );


        $plan  =  new Plans();


        $plan->name = $request->input_plan_name;
        $plan->amount = $request->input_amount;
        $plan->description = $request->input_description;
        $plan->duration = $request->input_validity;
        if($plan->save()) {

            // return 2;
           return back()->with('success','Successfully Created');
        }else {
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


        $plans = Plans::find($id);



        $fields = collect([
            [

                'label' => 'Plan Name',
                'name' => 'plan_name',
                'icon' => true,
                'icon_name' => 'box',
                'type' => 'text',
                'validate' =>  true,
                'value' => $plans->name,

            ],
            [

                'label' => 'Amount',
                'name' => 'amount',
                'icon' => true,
                'icon_name' => ' bx-money',
                'list' =>  null,
                'type' => 'text',
                'validate' =>  true,
                'value' => $plans->amount,

            ],
            [

                'label' => 'Validity',
                'name' => 'validity',
                'icon' => false,
                'icon_name' => 'box',

                'type' => 'select',
                'validate' =>  true,
                'value' => $plans->duration,
                'list' => [
                    [
                        'id' => 1,
                        'name' => '1 month',
                        'validity' => '1 month'
                    ],
                    [
                        'id' => 2,
                        'name' => '2 month',
                        'validity' => '2 month'
                    ],
                    [
                        'id' => 3,
                        'name' => '3 month',
                        'validity' => '3 month'
                    ],
                    [
                        'id' => 4,
                        'name' => '6 month',
                        'validity' => '6 month'
                    ],
                ]

            ],
            [

                'label' => 'Description',
                'name' => 'description',
                'icon' => true,
                'icon_name' => 'box',

                'type' => 'textarea',
                'validate' =>  true,
                'value' => $plans->description,

            ],


        ]
          );

          return view('backend.plans.edit',compact('fields','plans'));
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
            'input_plan_name' => 'required',
            'input_amount' => 'required|numeric|between:50,50000.99',
            'input_validity' => 'required',
            'input_description' => 'required',
        ],
        [
            'input_plan_name.required'=> 'Plan Name is Required', // custom message
            'input_amount.required'=> 'Amount is Required',
            'input_validity.required'=> 'Validity is Required',
            'input_description.required'=> 'Description is Required',
           ]
        );


        $plan  =  Plans::find($id);


        $plan->name = $request->input_plan_name;
        $plan->amount = $request->input_amount;
        $plan->description = $request->input_description;
        $plan->duration = $request->input_validity;
        if($plan->save()) {

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

        $package = Plans::find($id);
        if($package->delete()) {

            // return 2;
           return back()->with('success','Successfully Deleted');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }
}
