<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVehicleImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_vehicle_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_vehicle_id')->unsigned();
            $table->string('source');
            $table->timestamps();
        });
        Schema::table('user_vehicle_images', function(Blueprint $table) {
			$table->foreign('user_vehicle_id')->references('id')->on('user_vehicles')
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
        Schema::dropIfExists('user_vehicle_images');
    }
}
