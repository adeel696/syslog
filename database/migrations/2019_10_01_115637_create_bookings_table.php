<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('user_vehicle_id')->unsigned()->nullable();
            $table->bigInteger('warehouse_id')->unsigned()->nullable();
            $table->bigInteger('place_of_departure_id')->unsigned()->nullable();
            $table->bigInteger('place_of_arrival_id')->unsigned()->nullable();
            $table->string('amount');
            $table->date('date');
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('user_vehicle_id')->references('id')->on('user_vehicles')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('warehouse_id')->references('id')->on('warehouses')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('place_of_departure_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('bookings', function(Blueprint $table) {
			$table->foreign('place_of_arrival_id')->references('id')->on('cities')
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
        Schema::dropIfExists('bookings');
    }
}
