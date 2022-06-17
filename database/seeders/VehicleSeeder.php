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
                ['VehicleType' => 'bus','DriverName'=>'alam','Drivermobilenumber'=>12345678911,'Driverlicensenumber'=>45456,'Vehicleregistrationnumber'=>33333333,'Remark'=>'out','user_id'=>1],
                ['VehicleType' => 'truck','DriverName'=>'tanvir','Drivermobilenumber'=>12345678911,'Driverlicensenumber'=>45456,'Vehicleregistrationnumber'=>33333333,'Remark'=>'out','user_id'=>2]
            ];
        VehicleStand::insert($vehicleStands);
    }
}
