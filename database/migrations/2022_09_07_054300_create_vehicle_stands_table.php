<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_stands', function (Blueprint $table) {
            $table->id();
            $table->integer('ParkingNumber')->nullable();
            $table->string('VehicleType');
            $table->string('DriverName');
            $table->bigInteger('Drivermobilenumber');
            $table->bigInteger('Driverlicensenumber');
            $table->bigInteger('Vehicleregistrationnumber');
            $table->string('Remark')->nullable();
            $table->integer('Charge')->nullable();
            $table->boolean('Status')->default(false);
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_stands');
    }
};
