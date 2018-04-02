<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hastable('users')){
			Schema::create('users', function (Blueprint $table) {
				$table->increments('id');
				$table->string('username')->unique;
				$table->string('email')->unique()->nullable();
				$table->string('password');
				$table->string('lastname');
				$table->string('firstname');
				$table->string('middlename')->nullable();
				$table->enum('gender',['m','f']);
				$table->string('position');
				$table->boolean('is_active')->default(1);
				$table->string('contact_no');
				$table->integer('department')->unsigned()->nullable();
				$table->rememberToken();
				$table->timestamps();
			});
		}
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
