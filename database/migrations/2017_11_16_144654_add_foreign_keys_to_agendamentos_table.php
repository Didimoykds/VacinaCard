<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgendamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agendamentos', function(Blueprint $table)
		{
			$table->foreign('fk_usuario', 'fk_tb_agendamento_tb_usuario1')->references('id')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fk_vacina', 'fk_tb_agendamento_tb_vaciana1')->references('id')->on('vacinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agendamentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_tb_agendamento_tb_usuario1');
			$table->dropForeign('fk_tb_agendamento_tb_vaciana1');
		});
	}

}
