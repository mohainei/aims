<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonPoultriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person_poultries', function (Blueprint $table) {
			$table->increments('id');

			$table->string('poultry');
			$table->integer('total');
			$table->integer('total_present');

			$table->date('date_conducted');

			$table->string('date_conducted_range');// data range

			$table->integer('person_id')->unsigned;

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
		Schema::dropIfExists('person_poultries');
	}
}
