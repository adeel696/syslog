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
            $table->text('product_type')->nullable();
            $table->string('packaging')->nullable();
            $table->string('weight');
            $table->string('volume');
            $table->string('needed_space');
            $table->string('preferences');
            $table->string('preference_text')->nullable();
			$table->string('approx_storage_time')->nullable();
			$table->integer('city_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
            $table->string('amount')->nullable();
            $table->string('description')->nullable();
            $table->string('status');
            $table->timestamps();
        });
		
		Schema::table('warehouse_bookings', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
		
		Schema::table('warehouse_bookings', function(Blueprint $table) {
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
        Schema::dropIfExists('warehouse_bookings');
    }
}
