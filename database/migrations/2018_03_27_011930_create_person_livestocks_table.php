<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonLivestocksTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person_livestocks', function (Blueprint $table) {
			
			$table->increments('id');

			$table->string('livestock', 75);
			
			$table->integer('owned');
			
			$table->integer('total');
			$table->integer('total_present');
			
			$table->double('area', 15, 4);
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
		Schema::dropIfExists('person_livestocks');
	}
}
