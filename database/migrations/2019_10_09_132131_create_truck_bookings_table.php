<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('booking_id')->unsigned()->nullable();
            $table->text('type_of_truck')->nullable();
            $table->string('specifications')->nullable();
            $table->bigInteger('place_of_departure_city_id')->unsigned()->nullable();
            $table->bigInteger('place_of_arrival_city_id')->unsigned()->nullable();
            $table->string('capacity');
            $table->string('capacity_type');
			$table->string('information_product');
            $table->boolean('others');
            $table->boolean('insurances');
			$table->string('value_product');
            $table->boolean('loading');
            $table->boolean('offloading');
            $table->timestamps();
        });
        Schema::table('truck_bookings', function(Blueprint $table) {
			$table->foreign('booking_id')->references('id')->on('bookings')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('truck_bookings', function(Blueprint $table) {
			$table->foreign('place_of_departure_city_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('truck_bookings', function(Blueprint $table) {
			$table->foreign('place_of_arrival_city_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truck_bookings');
    }
}
