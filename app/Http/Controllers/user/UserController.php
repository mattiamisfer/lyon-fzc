<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required|min:8', // required and number field validation
             'confirm_password' => 'required|same:password',
             'mobile' => 'required'

        ]);


        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->mobile = $request->mobile;
        $User->role_as = 1;
        $User->password = bcrypt($request->password);
          $User->save();
         return response()->json(["status"=>true,"msg"=>"You have successfully registered, Login to access your dashboard",
         "redirect_location"=>url("login")]);  

        }
    }


    function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return with 422 status

        } else {
           //Auth
            //validations are passed try login using laravel auth attemp
            if (Auth::attempt($request->only(["email", "password"]))) {

                if(Auth::user()->role_as  ==1) {
                    return 1;
                    // return response()->json(["status"=>true,
                    // "redirect_location"=> route('admin.dashboard.index')]);
                } 
                if(Auth::user()->role_as  ==2) {
                    return response()->json(["status"=>true,
                    "redirect_location"=> route('dashboard.index')]);
                }

                
            } else {
                return response()->json([["Invalid credentials"]],422);
                
            }
        }
    }
}
