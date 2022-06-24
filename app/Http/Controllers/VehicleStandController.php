<?php

namespace App\Http\Controllers;

use App\Models\VehicleStand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class VehicleStandController extends Controller
{
    // show the entry from
    public function create(){
        return view('backend.create');
    }

    // fetching all vehicle detail's
    public function index(){
        $VehicleStandDetails = VehicleStand::all();
        return view('backend.manage',compact('VehicleStandDetails'));
    }

    // insert new vehicle entry
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

    // edit vehicle entry Info.
    public function edit($id){
        $vehicle_info = VehicleStand::find($id);
        return view('backend.edit')->with('vehicle_info',$vehicle_info);
    }

    // update vehicle entry Info.
    public function update(Request $req,$id){
        // validating the incoming Vehicle nfo to update.
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
        $vehicle_info = VehicleStand::find($id);
        $vehicle_info->update($req->all());
        Session::flash('success','update successfully!');
        return back();
    }

    // delete vehicle information in this specific id.
    public function destroy($id){
        $vehicle_id = VehicleStand::find($id);
        $vehicle_id->delete();
        return redirect()->route('vehicles.create')
                        ->with('success','Vehicle Info. deleted successfully');
    }

    
    // fetching all vehicle detail's
    public function manageBuses(){
        $VehicleStandDetails = VehicleStand::where('VehicleType','=','bus')
                                ->select('id','VehicleType','ParkingNumber','DriverName','created_at','Status')->get();
        return view('backend.manage',compact('VehicleStandDetails'));
    }
}
