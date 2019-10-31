<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showAccountCreation(){
     return view('create-rider-account');
 }


}
