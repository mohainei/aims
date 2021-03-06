<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToUsers extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function (Blueprint $table) {
			if (!Schema::hasColumn('users', 'username')) {
				//
				Schema::table('users', function (Blueprint $table) {
					$table->string('username')->unique();
					// $table->boolean('is_enabled')->default(0);
				});
			}
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function (Blueprint $table) {
			//
		});
	}
}
