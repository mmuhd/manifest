<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type');
            $table->string('vehicle_color');
            $table->string('vehicle_brand');
            $table->string('plate_number');
            $table->string('chasis_number');
            $table->string('owner_name');
            $table->string('owner_phone');
            $table->string('owner_address');
            $table->string('driver_name');
            $table->string('driver_phone');
            $table->string('driver_address');
            $table->string('driver_license_id');
            $table->boolean('is_active')->default(1);
            $table->boolean('is_available')->default(1);
            $table->string('image')->nullable();

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
        Schema::dropIfExists('vehicles');
    }
}
