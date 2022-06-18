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
                        <div class="easion-card-title"> Add Bus/Truck Entry </div>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Type</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option class="default" disabled >Choose Type</option>
                                    <option value="bus">Bus</option>
                                    <option value="truck">Truck</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Driver Name</label>
                                <input type="text" name="DriverName" class="form-control" id="exampleFormControlInput1" placeholder="Enter Driver Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Driver Mobile Number</label>
                                <input type="text" name="MobileNumber" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Registration Number</label>
                                <input type="text" name="RegistrationNumber" class="form-control" id="exampleFormControlInput1" placeholder="Registration Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">License Number</label>
                                <input type="text" name="LicenseNumber" class="form-control" id="exampleFormControlInput1" placeholder="License Number">
                            </div>
                            <button type="submit" class="btn btn-primary">Add New Entry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection