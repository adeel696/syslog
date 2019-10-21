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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('vehicle_id')->unsigned()->nullable();
            $table->bigInteger('construction_machinary_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('quantity');
            $table->string('capacity');
            $table->string('state');
            $table->string('meter_reading');
            $table->string('specifications');
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
