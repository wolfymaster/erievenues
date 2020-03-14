<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('venue_id');
            $table->double('base_fee'); //
            $table->double('hourly_rate');
            $table->integer('maximum_occupancy')->nullable(); //Maximum venue occupancy
            $table->integer('standing_quantity')->nullable(); //Total standing room allowed
            $table->integer('seating_quantity')->nullable(); // Total number of seating allowed
            $table->boolean('booth_seating')->nullable()->default(false);
            $table->boolean('high_top_seating')->nullable()->default(false);
            $table->boolean('regular_seating')->nullable()->default(false);
            $table->timestamps();

            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaces');
    }
}
