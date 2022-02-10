<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 
    public function index()
    {
        //
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
            'title' => 'Change Password',
            'name' => 'Change Password'
          ]);


           $user = User::find(Auth::user()->id);

        return view('backend.change.create',compact('page','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function loggedOut(Request $request)
    {
        //
    }
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'password' => 'min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8'
        ],
  
        );


        $user =  User::find(Auth::user()->id);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($user->save()) {

            // return 2;
            Auth::guard()->logout();

            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
    
            if ($response = $this->loggedOut($request)) {
                return $response;
            }
    
            return $request->wantsJson()
                ? new JsonResponse([], 204)
                : redirect('/login');

          //  return redirect()->route('login');
           return back()->with('success','Successfully Changed Password');
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
