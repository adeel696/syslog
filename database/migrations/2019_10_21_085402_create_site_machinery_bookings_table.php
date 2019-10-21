<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteMachineryBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_machinery_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id')->unsigned()->nullable();
            $table->integer('contruction_machinary_id')->unsigned()->nullable();
            $table->text('type_of_machinery')->nullable();
            $table->string('specification')->nullable();
            $table->integer('delivery_place_city_id')->unsigned()->nullable();
            $table->string('delivery_deadline');
            $table->string('duration_of_user');
            $table->string('preferences');
            $table->boolean('others');
            $table->timestamps();
        });
        Schema::table('site_machinery_bookings', function(Blueprint $table) {
			$table->foreign('booking_id')->references('id')->on('bookings')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('site_machinery_bookings', function(Blueprint $table) {
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
        Schema::dropIfExists('site_machinery_bookings');
    }
}
