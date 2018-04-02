<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */ 
	public function up()
	{
		if(!Schema::hastable('people')){
			Schema::create('people', function (Blueprint $table) {
				$table->increments('id');
				$table->string('fname', 75);
				$table->string('lname', 75);
				$table->string('mname', 75)->nullable();
				$table->integer('age');
				$table->string('gender');
				
				$table->enum('civil_status',
					['Single', 'Married', 'Separated', 
					]);
									
				$table->string('blood_type', 25)->nullable();

				$table->string('contact_no', 25)->nullable();
				$table->string('religion', 35)->nullable();
				$table->string('occupation', 50)->nullable();

				$table->string('centroid_points', 150)->nullable();

				$table->integer('brgy_id')->unsigned(); 
				$table->foreign('brgy_id')->references('id')->on('brgys');
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
		Schema::dropIfExists('people');
	}
}
