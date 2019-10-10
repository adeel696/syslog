<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_distances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('city_id_1')->unsigned();
            $table->bigInteger('city_id_2')->unsigned();
            $table->string('distances');
            $table->timestamps();
        });
        Schema::table('city_distances', function(Blueprint $table) {
			$table->foreign('city_id_1')->references('id')->on('cities')
						->onDelete('CASCADE')
						->onUpdate('CASCADE');
        });
        Schema::table('city_distances', function(Blueprint $table) {
			$table->foreign('city_id_2')->references('id')->on('cities')
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
        Schema::dropIfExists('city_distances');
    }
}
