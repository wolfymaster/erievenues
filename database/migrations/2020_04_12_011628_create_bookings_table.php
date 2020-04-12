<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('venue_id')->unsigned();
			$table->integer('day_id')->unsigned();
			$table->integer('start_slot_id')->unsigned();
			$table->integer('end_slot_id')->unsigned();
            $table->timestamps();

			$table->foreign('venue_id')->references('id')->on('venues');
			$table->foreign('day_id')->references('id')->on('days');
			$table->foreign('start_slot_id')->references('id')->on('time_slots');
			$table->foreign('end_slot_id')->references('id')->on('time_slots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
