<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
 //   protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectTo()
    {
        if(Auth::user()->role_as ==1) //1 = Admin Login
        {
            return 'admin/dashboard';
        }
        else // Normal or Default User Login
        {
            return '/';
        }
    }

    protected function authenticated()
    {
      //  $usercheck =  User::with(['subscription'])->find(Auth::user()->id);
        if(Auth::user()->role_as  ==1) //1 = Admin Login
        {

           // return 'Misfer';

           return redirect()->route('admin.dashboard.index')->with('status','Welcome to your dashboard');


          //   return redirect()->route('admin.dashboard.index')->with('status','Welcome to your dashboard');


          //return  'Welcome misfer';
        }
        else {
           // return redirect()->route('package')->with('status','Welcome to your dashboard');
         }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
