<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->integer('construction_machinary_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('quantity');
            $table->string('capacity');
			$table->string('date_of_entry');
			$table->string('registration_number');
			$table->string('meter_reading');
            $table->string('state');
            $table->string('mark');
			$table->string('maker');
			$table->string('series');
			$table->string('other_specifications');
            $table->timestamps();
        });
        Schema::table('user_vehicles', function(Blueprint $table) {
			$table->foreign('construction_machinary_id')->references('id')->on('construction_machinaries')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('user_vehicles', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('user_vehicles', function(Blueprint $table) {
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
        Schema::dropIfExists('user_vehicles');
    }
}
