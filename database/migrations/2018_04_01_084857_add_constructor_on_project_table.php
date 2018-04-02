<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstructorOnProjectTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projects', function (Blueprint $table) {
			//
			
			$table->string('funding_source')->nullable();
			$table->string('project_constructor')->nullable();
			$table->string('percentage_completion')->nullable();
			$table->string('centroid_points')->nullable();
			$table->string('approved_budget')->nullable();
			$table->date('proposed_date_start');
			$table->date('proposed_date_finished');
			$table->date('proposed_date_turnover')->nullable();


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projects', function (Blueprint $table) {
			//
		});
	}
}
