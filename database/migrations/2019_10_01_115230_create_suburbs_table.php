<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suburbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('city_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('suburbs', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suburbs');
    }
}
