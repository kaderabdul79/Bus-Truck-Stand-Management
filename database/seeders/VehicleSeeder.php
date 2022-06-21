<?php

namespace Database\Seeders;

use App\Models\VehicleStand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data vehicleStands tbl
        $vehicleStands = [
                ['VehicleType' => 'bus','DriverName'=>'alam','DriverMobilenumber'=>12345678911,'Driverlicensenumber'=>45456,'VehicleregistrationNumber'=>33333333,'Remark'=>'out'],
                ['VehicleType' => 'truck','DriverName'=>'tanvir','DriverMobilenumber'=>12345678911,'Driverlicensenumber'=>45456,'VehicleregistrationNumber'=>33333333,'Remark'=>'out']
            ];
        VehicleStand::insert($vehicleStands);
    }
}
