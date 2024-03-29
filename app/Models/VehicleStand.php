<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleStand extends Model
{
    use HasFactory;

    protected $fillable = ['VehicleType','DriverMobileNumber','DriverName','VehicleRegistrationNumber','DriverLicenseNumber','Status','ParkingNumber'];
}
