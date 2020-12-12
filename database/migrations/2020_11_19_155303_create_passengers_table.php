<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('manifestId');
            $table->string('tripId');
            $table->string('passengerId');
            $table->string('passengerPhone')->nullable();
            $table->string('name');
            $table->string('sex');
            $table->string('address');
            $table->string('destination');
            $table->string('nextOfKin');
            $table->string('nextOfKinPhone');
            $table->string('wards')->nullable();
            $table->string('ticketId')->nullable();
            $table->string('seatNo')->nullable();
            $table->string('balance')->nullable();
            $table->string('addedBy');

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
        Schema::dropIfExists('passengers');
    }
}
