<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('maximum_occupancy')->nullable(); //Maximum venue occupancy
            $table->integer('standing_quantity')->nullable(); //Total standing room allowed
            $table->integer('seating_quantity')->nullable(); // Total number of seating allowed
            $table->integer('price_level')->nullable(); //Rating 1-4 e.g. $$$ or $$$$
            $table->double('base_fee'); //
            $table->double('hourly_rate');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->boolean('express_booking')->nullable()->default(false);

            //Foreign Keys
            $table->foreign('venue_type')->references('id')->on('venue_types')->onDelete('cascade');





            
            //How to model many to many in the table?
            //Payment Policies
            //Ownership Types
            //Spaces
            //Seating Types
            //Service Options
            //Amenities
            //Images
            //ThreeSixtyImages
            //video_tour
            //documents
            //parking options
            //considerations
            //Restrooms





            $table->timestamps(); //Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
