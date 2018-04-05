<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedules', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('dataMarcada')->nullable();
			$table->string('local', 45);
			$table->date('diaVacina')->nullable();
			$table->string('lote', 45)->nullable();
			$table->string('observacao', 45)->nullable();
			$table->enum('status', array('concluida','nao_concluida'))->nullable();
			$table->integer('fk_user')->index('fk_schedules_user1_idx');
			$table->integer('fk_vaccine')->index('fk_schedules_vaciana1_idx');
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
		Schema::drop('schedules');
	}

}
