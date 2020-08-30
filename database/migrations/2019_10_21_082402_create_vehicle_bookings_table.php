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
            $table->increments('id');
			$table->integer('vehicle_id')->unsigned()->nullable();
            $table->text('type_of_vehicle')->nullable();
            $table->integer('place_of_departure_country_id')->unsigned()->nullable();
            $table->integer('place_of_arrival_country_id')->unsigned()->nullable();
			$table->integer('place_of_departure_city_id')->unsigned()->nullable();
            $table->integer('place_of_arrival_city_id')->unsigned()->nullable();
            $table->string('capacity');
            $table->string('preferences')->nullable();
            $table->string('number_of_seats')->nullable();
            $table->string('duration')->nullable();
            $table->boolean('others')->nullable();
            $table->string('specifications')->nullable();
            $table->string('insurances')->nullable();
			$table->string('value_product')->nullable();
            $table->string('loading')->nullable();
            $table->string('offloading')->nullable();
			$table->integer('user_id')->unsigned()->nullable();
            $table->string('amount')->nullable();
            $table->string('description')->nullable();
            $table->string('status');
			$table->integer('country_id')->unsigned();
            $table->timestamps();
        });

	
		Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
		
        Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('place_of_departure_country_id')->references('id')->on('countries')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('place_of_arrival_country_id')->references('id')->on('countries')
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
		
		Schema::table('vehicle_bookings', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
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
