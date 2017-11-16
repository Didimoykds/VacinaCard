<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtendimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atendimentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titulo', 45);
			$table->string('descricao', 200);
			$table->integer('fk_user')->index('fk_atendimentos_user1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atendimentos');
	}

}
