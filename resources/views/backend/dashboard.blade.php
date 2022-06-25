@extends('backend.master')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <div class="row dash-row">
            <div class="col-xl-4">
                <div class="stats stats-primary">
                    <h3 class="stats-title"> Total Vehicle Entry</h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fa fa-car" style="font-size: 90px"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">{{$vehiclesCount['totalVehicle']}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-primary">
                    <h3 class="stats-title"> Total Bus Entry</h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fa fa-bus" style="font-size: 90px"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">{{$vehiclesCount['totalBuses']}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-primary">
                    <h3 class="stats-title"> Total Trucks Entry</h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fa fa-truck" style="font-size: 90px"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">{{$vehiclesCount['totalTrucks']}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>            
@endsection