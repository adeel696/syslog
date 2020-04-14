<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->string('avatar')->nullable();
			$table->integer('booking')->default(1);
			$table->integer('users')->default(1);
			$table->integer('fares')->default(1);
			$table->integer('vehicles')->default(1);
			$table->integer('construction_machines')->default(1);
			$table->integer('offer')->default(1);
			$table->integer('packaging')->default(1);
			$table->integer('goods_deals')->default(1);
			$table->integer('cities')->default(1);
            $table->rememberToken();
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
        Schema::drop('admins');
    }
}
