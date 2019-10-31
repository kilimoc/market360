<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Owner;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaccoManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:saccomanager');
    }

    public function myDashBoard(){
        return view('saccomanager.smdashboard');
    }
    public function newOwnerRegistrationForm(){
        return view('saccomanager.new_vehicle_owner');
    }

    //store Owner Details
    public function  saveOwnerDetails(Request $request){
        $this->validate($request,[
            'idno'=>'required|max:8',
            'fname'=>'required|max:30',
            'lname'=>'required|max:30',
            'phone'=>'required|max:10',
        ]);

        $ownerObj=new Owner();
        //Check if the ID exists
        if(!empty($this->checkIdExistence('owners',$request->input('idno')))){
            return back()->with('error','Id Number is already registered');
        }
        else{
            //Register the new Owner
            $ownerObj->id_number=$request->input('idno');
            $ownerObj->first_name=$request->input('fname');
            $ownerObj->last_name=$request->input('lname');
            $ownerObj->phone=$request->input('phone');
            $ownerObj->save();
            return back()->with('success','Owner has been Successfully Registered');
        }

    }

    public function newDriverRegistrationForm(){
        return view('saccomanager.new_vehicle_driver');
    }

    //store Owner Details
    public function  saveDriverDetails(Request $request){
        $this->validate($request,[
            'idno'=>'required|max:8',
            'fname'=>'required|max:30',
            'lname'=>'required|max:30',
            'phone'=>'required|max:10',
        ]);

        $driverObj=new Driver();
        //Check if the ID exists
        if(!empty($this->checkIdExistence('drivers',$request->input('idno')))){
            return back()->with('error','Id Number is already registered');
        }
        else{
            //Register the new Owner
            $driverObj->id_number=$request->input('idno');
            $driverObj->first_name=$request->input('fname');
            $driverObj->last_name=$request->input('lname');
            $driverObj->phone=$request->input('phone');
            $driverObj->save();
            return back()->with('success','Driver has been successfully registered');
        }

    }


    public function newVehicleRegistrationForm(){
        return view('saccomanager.new_vehicle');
    }

    //store Owner Details
    public function  saveVehicleDetails(Request $request){
        $this->validate($request,[
            'regno'=>'required|max:7',
            'seats'=>'required|max:2',
            'driverID'=>'required|max:8',
            'ownerID'=>'required|max:8',
            'v_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //Let us handle Image Upload;
        //Handle File upload
        if($request->hasFile('v_image')){
            //get file name with extension;
            $fileNameWithExt=$request->file('v_image')->getClientOriginalName();
            //get just filename;
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension;
            $extension=$request->file('v_image')->getClientOriginalExtension();

            $fileNameToStore=$filename.'_'.time().'.'.$extension;

            $path=$request->file('v_image')->storeAs('public/vehicle_images',$fileNameToStore);

        }else{
            $fileNameToStore='noimage.jpg';
        }


        $vehicleObj=new Vehicle();
        //Check if the driver and the owner has been registered;
       if(!empty($this->checkIdExistence('drivers',$request->input('driverID'))) && !empty($this->checkIdExistence('owners',$request->input('ownerID'))) ){
            //Here we register
           //Register the new Owner
           $vehicleObj->reg_number=$request->input('regno');
           $vehicleObj->seats=$request->input('seats');
           $vehicleObj->driver_id=$request->input('driverID');
           $vehicleObj->owner_id=$request->input('ownerID');
           $vehicleObj->v_image=$fileNameToStore;
           $vehicleObj->save();
           return back()->with('success','Vehicle successfully registered');
       }
        else{
            return back()->with('error','The owner or Driver has not been registered.Please ensure they are registered first');
        }

    }
    //Get All Vehicles;
public function getAllVehicles(){
        $vehicles=Vehicle::all();
        return view('saccomanager.all_vehicles')->with('vehicles',$vehicles);
}


    //These are custom functions
    public function checkIdExistence($table,$idnumber){
        $idnumber=DB::table($table)->where('id_number',$idnumber)->value('id_number');
        return $idnumber;
    }

    //

}
