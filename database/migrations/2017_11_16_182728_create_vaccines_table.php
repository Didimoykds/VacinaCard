<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVaccinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaccines', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45);
			$table->string('description', 100);
			$table->string('recurrence', 10);
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
		Schema::drop('vaccines');
	}

}
