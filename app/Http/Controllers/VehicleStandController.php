<?php

namespace App\Http\Controllers;

use App\Models\VehicleStand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

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

    
    // fetching all buses detail's specifically
    public function manageBuses(){
        $VehicleStandDetails = VehicleStand::where('VehicleType','=','bus')
                                ->select('id','VehicleType','ParkingNumber','DriverName','created_at','Status')->get();
        return view('backend.manage-buses',compact('VehicleStandDetails'));
    }

    // fetching all buses detail's specifically
    public function manageTrucks(){
        $VehicleStandDetails = VehicleStand::where('VehicleType','=','truck')
                                ->select('id','VehicleType','ParkingNumber','DriverName','created_at','Status')->get();
        return view('backend.manage-trucks',compact('VehicleStandDetails'));
    }

    // count Vehicles, and according today,last week and yesterday 
    public function countVehicles(){
        $totalVehicle = VehicleStand::get()->count();
        $totalBuses = VehicleStand::where('VehicleType','=','bus')->count();
        $totalTrucks = VehicleStand::where('VehicleType','=','truck')->count();

        $vehiclesCount = [
            'totalVehicle' => $totalVehicle,
            'totalBuses' => $totalBuses,
            'totalTrucks' => $totalTrucks
        ];
        return view('backend.dashboard',compact('vehiclesCount'));
    }

    // generating vehicle entry report according to the specific id
    public function generatingPDF($id){
        $vehicleInfo = VehicleStand::findOrFail($id);
        // converting in array, reason loadView taking only array
        $vehicleData = [
            'VehicleType' => $vehicleInfo->VehicleType,
            'DriverName' => $vehicleInfo->DriverName,
            'DriverMobileNumber' => $vehicleInfo->DriverMobileNumber,
            'VehicleRegistrationNumber' => $vehicleInfo->VehicleRegistrationNumber,
            'DriverLicenseNumber' => $vehicleInfo->DriverLicenseNumber,
            'Status' => $vehicleInfo->Status,
            'Charge' => $vehicleInfo->Charge,

        ];

        $pdf = Pdf::loadView('backend.vehicle-entry-report', $vehicleData);
        return $pdf->download('vehicle-entry-report.pdf');
    }

}
