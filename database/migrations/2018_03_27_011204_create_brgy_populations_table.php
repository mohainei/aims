<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrgyPopulationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brgy_populations', function (Blueprint $table) {
			$table->increments('id');

			$table->string('population_source');
			$table->integer('population_total');
			$table->date('date_conducted');
			
			$table->integer('brgy_id')->unsigned();
			$table->integer('population_id')->unsigned();
			$table->integer('filled_by')->unsigned();

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
		Schema::dropIfExists('brgy_populations');
	}
}
