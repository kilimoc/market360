<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaccoManagerLoginController extends Controller
{


    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        //Validate form Data
        $this->validate($request,[
            'phone'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(Auth::guard('saccomanager')->attempt(['phone'=>$request->phone,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('saccomanager.smdashboard',['username'=>Auth::id()]));
        }
        //if unsuccessful return it back;
        return redirect()->back()->withInput($request->only('phone','remember'));
    }
}
