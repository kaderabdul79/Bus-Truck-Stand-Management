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
                        <form action="{{route('vehicles.store')}}" method="POST">
                            @csrf
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
                                <input type="text" name="DriverName" value="{{old('DriverName')}}" class="DriverName form-control" id="exampleFormControlInput1" placeholder="Enter Driver Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Driver Mobile Number</label>
                                <input type="text" name="DriverMobileNumber" value="{{old('DriverMobileNumber')}}" class="form-control DriverMobileNumber" id="exampleFormControlInput1" placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Registration Number</label>
                                <input type="text" name="VehicleRegistrationNumber" value="{{old('VehicleRegistrationNumber')}}" class="form-control VehicleRegistrationNumber" id="exampleFormControlInput1" placeholder="Registration Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">License Number</label>
                                <input type="text" name="DriverLicenseNumber" value="{{old('DriverLicenseNumber')}}" class="form-control DriverLicenseNumber" id="exampleFormControlInput1" placeholder="License Number">
                            </div>
                            {{-- parkingNumber --}}
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Parking Number</label>
                                <input type="text" name="parkingNumber" value="{{old('parkingNumber')}}" class="form-control parkingNumber" id="exampleFormControlInput1" placeholder="Parking Number">
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

@section('script')
<script>
   $(document).ready(function(){
        $('.parkingNumber').on('click',function(){
            // taking first word from driver name
            let DriverName = $('.DriverName').val();
            let firstWord = DriverName.split(' ');
            let fname = firstWord[0];

            // taking 3 digit from DriverLicenseNumber
            let DriverLicenseNumber = $('.DriverLicenseNumber').val();
            let threeDigit = DriverLicenseNumber.slice(0,3)

            // geting parkingNo by concating 
            let parkingNo = threeDigit+fname;
            // setParkingNo and disabled the input field
            let setParkingNo = $(this).val(parkingNo).attr('disabled',true);
        })
    
   })
</script>
@endsection