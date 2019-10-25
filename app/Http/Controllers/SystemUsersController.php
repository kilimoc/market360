<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class SystemUsersController extends Controller
{
 public function createSystemUser(Request $request){
     $this->validate($request,[
         'fname'=>'required|max:30',
         'lname'=>'required|max:30',
         'phone'=>'required|max:10',
         'password'=>'required'

     ]);
     //Handle File upload
     $customer=new Customer();

     $customer->fname=$request->input('fname');
     $customer->lname=$request->input('lname');
     $customer->phone=$request->input('phone');
     $customer->password=$request->input('password');
     $customer->save();
     return redirect('/CreateAccount')->with('success','You have been Successfully Registered.');
 }
}
