<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	
	public function up()
	{
		Schema::create('indicators', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('field_type');
			$table->string('field_formula');
			$table->string('is_approved');
			$table->string('is_submitted');

			$table->integer('submitted_by')->unsigned();

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
		Schema::dropIfExists('indicators');
	}
}
