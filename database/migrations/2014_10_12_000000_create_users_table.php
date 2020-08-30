<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tax_number')->nullable();
			$table->string('rccm_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
			$table->string('instagram')->nullable();
			$table->smallInteger('type')->nullable();
			$table->smallInteger('parent_id')->nullable();
			$table->string('avatar')->nullable();
			$table->integer('country_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
		
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
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
        Schema::dropIfExists('users');
    }
}
