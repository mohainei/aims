<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hastable('projects')){
            Schema::create('projects', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name');
				$table->mediumText('remarks')->nullable();
				$table->decimal('cost', 8, 2)->nullable();
				
				$table->integer('agency_id')->unsigned(); 
				$table->foreign('agency_id')->references('id')->on('agencies');
                $table->integer('component_id')->unsigned(); 
                $table->foreign('component_id')->references('id')->on('components');
				
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
        Schema::dropIfExists('projects');
    }
}
