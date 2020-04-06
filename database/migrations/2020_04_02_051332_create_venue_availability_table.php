<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenueAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_availability', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('venue_id')->unsigned();
			$table->integer('day_id')->unsigned();
			$table->integer('time_id')->unsigned();
            $table->boolean('is_unavailable');
            $table->timestamps();

			$table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
			$table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
			$table->foreign('time_id')->references('id')->on('time_slots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venue_availability');
    }
}
