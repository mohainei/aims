<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddComponentToAgency extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencies', function (Blueprint $table) {
			//
			$table->integer('component_id')->unsigned(); 
			$table->foreign('component_id')->references('id')->on('components');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencies', function (Blueprint $table) {
			//
		});
	}
}
