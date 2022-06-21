<?php

namespace App\Http\Controllers;

use App\Models\VehicleStand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class VehicleStandController extends Controller
{
    public function store(Request $req){
        // validating the incoming new Vehicle Entry Info.
        $validation = Validator::make($req->all(),[
            'VehicleType' => 'required',
            'DriverMobileNumber' => 'required|min:8|max:11',
            'DriverName' => 'required',
            'VehicleRegistrationNumber' => 'required|min:6',
            'DriverLicenseNumber' => 'required|min:3|max:8'  
        ]);
        if($validation->fails()){
            return back()->with('errors',$validation->messages());
        }
        // creating a VehicleStand instance
        $newEntryInfo = new VehicleStand;
        $newEntryInfo->VehicleType = $req->VehicleType;
        $newEntryInfo->DriverName = $req->DriverName;
        $newEntryInfo->DriverMobileNumber = $req->DriverMobileNumber;
        $newEntryInfo->VehicleRegistrationNumber = $req->VehicleRegistrationNumber;
        $newEntryInfo->DriverLicenseNumber = $req->DriverLicenseNumber;
        $newEntryInfo->save();
        // showing flash message
        Session::flash('success','new entry successfully inserted');
        return back();
    }
}