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
            $table->double('price_level')->nullable(); //Rating 1-4 e.g. $$$ or $$$$
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->double('latitude');
            $table->double('longitude');
            $table->text('considerations')->nullable();

            //Payment Policies
            $table->boolean('express_booking')->nullable()->default(false);
            $table->boolean('deposit_required')->nullable()->default(false);
            $table->boolean('accepts_credit_card')->nullable()->default(false);
            $table->boolean('accepts_check')->nullable()->default(false);

            //Catering and Service
            $table->boolean('private_bar')->nullable()->default(false);
            $table->boolean('public_bar')->nullable()->default(false);
            $table->boolean('allows_byob')->nullable()->default(false);
            $table->boolean('catering_allowed')->nullable()->default(false);
            $table->boolean('venue_caters')->nullable()->default(false);
            $table->boolean('food_for_purchase')->nullable()->default(false);

            //Ownership Types
            $table->boolean('locally_owned')->nullable()->default(false);
            $table->boolean('woman_owned')->nullable()->default(false);
            $table->boolean('veteran_owned')->nullable()->default(false);
            $table->boolean('franchise_owned')->nullable()->default(false);
            $table->boolean('small_business')->nullable()->default(false);
            

            //Parking
            $table->boolean('free_lot')->nullable()->default(false);
            $table->boolean('paid_lot')->nullable()->default(false);
            $table->boolean('free_parking_garage')->nullable()->default(false);
            $table->boolean('paid_parking_garage')->nullable()->default(false);
            $table->boolean('free_street_parking')->nullable()->default(false);
            $table->boolean('paid_street_parking')->nullable()->default(false);
            $table->boolean('valet_parking')->nullable()->default(false);


            //Considerations
            $table->boolean('children_not_allowed')->nullable()->default(false);
            $table->boolean('under_18_not_allowed')->nullable()->default(false);
            $table->boolean('under_21_not_allowed')->nullable()->default(false);
            $table->boolean('dog_friendly')->nullable()->default(false);
            $table->boolean('smoking')->nullable()->default(false);
            $table->boolean('outside_smoking')->nullable()->default(false);
            $table->boolean('handicap_accessible')->nullable()->default(false);
            $table->boolean('has_elevator')->nullable()->default(false);
            $table->boolean('has_stairs')->nullable()->default(false);
			$table->boolean('has_wifi')->nullable()->default(false);

            //Restrooms
            $table->boolean('private_restroom')->nullable()->default(false);
            $table->boolean('public_restroom')->nullable()->default(false);
            $table->boolean('gender_neutral_restrooms')->nullable()->default(false);
            $table->boolean('handicap_accessible_restrooms')->nullable()->default(false);
            $table->boolean('portable_restrooms')->nullable()->default(false);
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
