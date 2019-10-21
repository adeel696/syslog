<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('offer_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('user_offers', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('user_offers', function(Blueprint $table) {
			$table->foreign('offer_id')->references('id')->on('offers')
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
        Schema::dropIfExists('user_offers');
    }
}
