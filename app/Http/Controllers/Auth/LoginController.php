<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:saccomanager')->except('logout');
    }

    public function showSaccoManagerLoginForm(){
        return view('login',['url'=>'saccomanager']);
    }

    public function saccoManagerLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'

        ]);

        if (Auth::guard('saccomanager')->attempt(['email'=>$request->email,'password'=>$request->password],$request->get('remember'))){

            return redirect()->intended('/SaccoManager');
        }
        return back()->withInput($request->only('email','remember'));
    }

 //Logout User;
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request)?:redirect('/login/saccomanager');
    }
}
