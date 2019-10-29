<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id')->unsigned()->nullable();
            $table->text('product_type')->nullable();
            $table->string('packaging')->nullable();
            $table->string('weight');
            $table->string('volume');
            $table->string('needed_space');
            $table->string('preferences');
            $table->boolean('preference_text')->nullable();
			$table->integer('city_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('warehouse_bookings', function(Blueprint $table) {
			$table->foreign('booking_id')->references('id')->on('bookings')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
		
		Schema::table('warehouse_bookings', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
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
        Schema::dropIfExists('warehouse_bookings');
    }
}
