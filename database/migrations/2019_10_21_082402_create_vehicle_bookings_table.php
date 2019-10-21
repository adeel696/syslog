<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('booking_id')->unsigned()->nullable();
            $table->text('type_of_vehicle')->nullable();
            $table->bigInteger('place_of_departure_city_id')->unsigned()->nullable();
            $table->bigInteger('place_of_arrival_city_id')->unsigned()->nullable();
            $table->string('capacity');
            $table->string('capacity_type');
            $table->string('preferences')->nullable();
            $table->string('number_of_seats')->nullable();
            $table->string('duration');
            $table->boolean('others');
            $table->string('specifications')->nullable();
            $table->string('insurances');
            $table->string('loading');
            $table->string('offloading');
            $table->timestamps();
        });
        Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('booking_id')->references('id')->on('bookings')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('place_of_departure_city_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('place_of_arrival_city_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('vehicle_id')->references('id')->on('vehicles')
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
        Schema::dropIfExists('vehicle_bookings');
    }
}
