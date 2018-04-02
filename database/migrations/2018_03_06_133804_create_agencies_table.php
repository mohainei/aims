<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(!Schema::hastable('agencies')){
			Schema::create('agencies', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name');
				$table->string('abbr');
				$table->string('address');
				$table->string('contact_no');
				$table->string('centroid_points');
				$table->longText('desc');
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
		Schema::dropIfExists('agencies');
	}
}
