<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
			$table->string('type')->nullable();
			$table->string('insurance_type')->nullable();
			$table->string('range_of_age_of_vehicule')->nullable();
			$table->string('value_of_vehicle')->nullable();
			$table->string('power')->nullable();
			$table->string('designation')->nullable();
			$table->string('packaging')->nullable();
			$table->string('caracteristics')->nullable();
			$table->string('brand')->nullable();
			$table->string('reference')->nullable();
			$table->string('others')->nullable();
			$table->string('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
