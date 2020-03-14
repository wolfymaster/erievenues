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
            $table->foreign('venue_type')->references('id')->on('venue_types')->onDelete('cascade');
            $table->integer('maximum_occupancy')->nullable(); //Maximum venue occupancy
            $table->integer('standing_quantity')->nullable(); //Total standing room allowed
            $table->integer('seating_quantity')->nullable(); // Total number of seating allowed
            $table->integer('price_level')->nullable(); //Rating 1-4 e.g. $$$ or $$$$
            $table->double('base_fee'); //
            $table->double('hourly_rate');
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->text('considerations')->nullable();

            //Payment Policies
            $table->boolean('express_booking')->nullable()->default(false);
            $table->boolean('deposit_required')->nullable()->default(false);
            $table->boolean('accepts_credit_card')->nullable()->default(false);
            $table->boolean('accepts_check')->nullable()->default(false);

            //Seating
            $table->boolean('booth_seating')->nullable()->default(false);
            $table->boolean('high_top_seating')->nullable()->default(false);
            $table->boolean('regular_seating')->nullable()->default(false);

            //Utilities
            $table->boolean('projector')->nullable()->default(false);
            $table->boolean('projector_screen')->nullable()->default(false);
            $table->boolean('speakers')->nullable()->default(false);
            $table->boolean('microphone')->nullable()->default(false);
            $table->boolean('podium')->nullable()->default(false);
            $table->boolean('stage')->nullable()->default(false);
            $table->boolean('television')->nullable()->default(false);
            $table->boolean('HDMI_port')->nullable()->default(false);
            $table->boolean('HDMI_cable')->nullable()->default(false);
            $table->boolean('whiteboard')->nullable()->default(false);
            $table->boolean('board_games')->nullable()->default(false);
            $table->boolean('table_games')->nullable()->default(false);
            $table->boolean('dance_floor')->nullable()->default(false);
            $table->boolean('computer')->nullable()->default(false);
            $table->boolean('dvd_player')->nullable()->default(false);
            

            //Catering and Service
            $table->boolean('private_bar')->nullable()->default(false);
            $table->boolean('public_bar')->nullable()->default(false);
            $table->boolean('catering_allowed')->nullable()->default(false);
            $table->boolean('venue_caters')->nullable()->default(false);

            //Ownership Types
            $table->boolean('locally_owned')->nullable()->default(false);
            $table->boolean('woman_owned')->nullable()->default(false);
            $table->boolean('veteran_owned')->nullable()->default(false);
            $table->boolean('franchise_owned')->nullable()->default(false);
            $table->boolean('small_business')->nullable()->default(false);

            //Venue Type
            $table->boolean('restaurant')->nullable()->default(false);
            $table->boolean('brewery')->nullable()->default(false);
            $table->boolean('winery')->nullable()->default(false);
            $table->boolean('distillery')->nullable()->default(false);
            $table->boolean('coffee_shop')->nullable()->default(false);
            $table->boolean('event_center')->nullable()->default(false);
            $table->boolean('hotel')->nullable()->default(false);
            $table->boolean('office')->nullable()->default(false);
            $table->boolean('business_space')->nullable()->default(false);
            $table->boolean('art_museum')->nullable()->default(false);
            $table->boolean('conference_room')->nullable()->default(false);
            $table->boolean('community_room')->nullable()->default(false);
            $table->boolean('private_club')->nullable()->default(false);
            $table->boolean('private_residence')->nullable()->default(false);
            $table->boolean('public_space')->nullable()->default(false);
            $table->boolean('school')->nullable()->default(false);
            

            //Parking
            $table->boolean('free_lot')->nullable()->default(false);
            $table->boolean('paid_lot')->nullable()->default(false);
            $table->boolean('free_parking_garage')->nullable()->default(false);
            $table->boolean('paid_parking_garage')->nullable()->default(false);
            $table->boolean('free_street_parking')->nullable()->default(false);
            $table->boolean('paid_street_parking')->nullable()->default(false);


            //Considerations
            $table->boolean('children_not_allowed')->nullable()->default(false);
            $table->boolean('under_18_not_allowed')->nullable()->default(false);
            $table->boolean('under_21_not_allowed')->nullable()->default(false);
            $table->boolean('handicap_accessible')->nullable()->default(false);
            $table->boolean('has_elevator')->nullable()->default(false);
            $table->boolean('has_stairs')->nullable()->default(false);

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
