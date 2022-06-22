@extends('backend.master')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Manage Bus Entry Details</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">Manage Buses/Trucks Entry Details                        </div>
                    </div>
                    <div class="card-body ">
                        <table class="table table-in-card">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Parking Number</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Driver Name</th>
                                    <th scope="col">Entry Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($VehicleStandDetails as $vehicle)
                                    <tr>
                                        <th scope="row">{{$vehicle->id}}</th>
                                        <td>{{$vehicle->ParkingNumber}}</td>
                                        <td>{{$vehicle->VehicleType}}</td>
                                        <td>{{$vehicle->DriverName}}</td>
                                        <td>{{$vehicle->created_at->format('Y-m-d')}}</td>
                                        <td>{{$vehicle->Status == 0 ? "$vehicle->VehicleType Out" : "$vehicle->VehicleType In"}}</td>
                                        <td>
                                            <a href="" type="submit" class="btn btn-primary btn-sm">Print</a>
                                            <a href="" type="submit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="" type="submit" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> 
@endsection