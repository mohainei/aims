<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrgyCalamitiesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brgy_calamities', function (Blueprint $table) {
			$table->increments('id');

			$table->string('name');
			$table->mediumText('remarks');
			$table->string('concern_cause');
			$table->string('date_occured');

			$table->integer('total_affected');

			$table->string('centroid_points');
			$table->string('status');
			
			$table->integer('brgy_id')->unsigned(); 
			$table->foreign('brgy_id')->references('id')->on('brgys');

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
		Schema::dropIfExists('brgy_calamities');
	}
}
