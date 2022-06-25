@extends('backend.master')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="easion-card-title"> Edit Bus/Truck Entry </div>
                    </div>
                    <div class="card-body ">
                        <form action="{{route('vehicles.update',$vehicle_info->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            @if(session('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Type</label>
                                <select class="form-control" name="VehicleType" id="exampleFormControlSelect1">
                                    <option class="default" disabled >Choose Type</option>
                                    <option value="bus">Bus</option>
                                    <option value="truck">Truck</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Driver Name</label>
                                <input type="text" name="DriverName" value="{{$vehicle_info->DriverName}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Driver Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Driver Mobile Number</label>
                                <input type="text" name="DriverMobileNumber" value="{{$vehicle_info->DriverMobilenumber}}" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Registration Number</label>
                                <input type="text" name="VehicleRegistrationNumber" value="{{$vehicle_info->VehicleRegistrationNumber}}" class="form-control" id="exampleFormControlInput1" placeholder="Registration Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">License Number</label>
                                <input type="text" name="DriverLicenseNumber" value="{{$vehicle_info->Driverlicensenumber}}" class="form-control" id="exampleFormControlInput1" placeholder="License Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name="Status" id="exampleFormControlSelect1">
                                    <option value="1">In</option>
                                    <option value="0">Out</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Entry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection