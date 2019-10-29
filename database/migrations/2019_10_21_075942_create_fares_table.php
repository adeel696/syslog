<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contruction_machinary_id')->unsigned()->nullable();
			$table->integer('vehicle_id')->unsigned()->nullable();
            $table->text('type_of_vehicle')->nullable();
            $table->integer('from_city')->unsigned()->nullable();
            $table->integer('to_city')->unsigned()->nullable();
            $table->string('capacity');
            $table->string('insurances_amount');
            $table->string('loading_price');
            $table->string('offloading_price');
            $table->string('fare');
            $table->timestamps();
        });
        Schema::table('fares', function(Blueprint $table) {
			$table->foreign('vehicle_id')->references('id')->on('vehicles')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
		Schema::table('fares', function(Blueprint $table) {
			$table->foreign('contruction_machinary_id')->references('id')->on('construction_machinaries')
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
        Schema::dropIfExists('fares');
    }
}
