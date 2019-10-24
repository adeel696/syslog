<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContructionMachineryBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contruction_machinaries_bookings', function (Blueprint $table) {
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
        Schema::table('contruction_machinaries_bookings', function(Blueprint $table) {
			$table->foreign('booking_id', 'fk_foreign_c_bid')->references('id')->on('bookings')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('contruction_machinaries_bookings', function(Blueprint $table) {
			$table->foreign('contruction_machinary_id' ,'fk_foreign_c_cid')->references('id')->on('construction_machinaries')
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
        Schema::dropIfExists('contruction_machinaries_bookings');
    }
}
