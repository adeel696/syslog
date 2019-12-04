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
            $table->integer('contruction_machinary_id')->unsigned()->nullable();
            $table->string('type_of_machinery')->nullable();
            $table->string('specification')->nullable();
            $table->integer('delivery_place_city_id')->unsigned()->nullable();
            $table->string('delivery_deadline');
            $table->string('duration_of_user')->nullable();
            $table->string('preferences');
            $table->boolean('others')->nullable();
			$table->integer('user_id')->unsigned()->nullable();
            $table->string('amount')->nullable();
            $table->string('description')->nullable();
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('contruction_machinaries_bookings', function(Blueprint $table) {
			$table->foreign('contruction_machinary_id' ,'fk_foreign_c_cid')->references('id')->on('construction_machinaries')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
		
		Schema::table('contruction_machinaries_bookings', function(Blueprint $table) {
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
        Schema::dropIfExists('contruction_machinaries_bookings');
    }
}
