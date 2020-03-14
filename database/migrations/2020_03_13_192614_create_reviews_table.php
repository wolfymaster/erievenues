<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('venue')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('event')->references('id')->on('events')->onDelete('cascade');
            // All ratings 1-5
            $table->integer('overall_rating'); 
            $table->integer('food_rating')->nullable();
            $table->integer('ambiance_rating')->nullable();
            $table->integer('listing_accuracy_rating')->nullable();
            $table->integer('service_rating')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
