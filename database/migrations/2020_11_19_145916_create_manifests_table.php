<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifests', function (Blueprint $table) {
            $table->id();
            $table->string('manifestId');
            $table->string('tripId');
            $table->string('vehicle');
            $table->string('seats');
            $table->string('fare');
            $table->string('photo')->nullable();
            $table->string('travelFrom');
            $table->string('travelTo');
            $table->string('tripStatus')->nullable();
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
        Schema::dropIfExists('manifests');
    }
}
