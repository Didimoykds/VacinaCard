<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agendamentos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('dt_prevista');
			$table->string('local', 45);
			$table->timestamp('dt_vacinacao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('lote', 45)->nullable();
			$table->string('observacao', 45)->nullable();
			$table->enum('status', array('atrasada','concluida','nao_concluida'))->nullable();
			$table->integer('fk_usuario')->index('fk_agendamentos_usuario1_idx');
			$table->integer('fk_vacina')->index('fk_agendamentso_vaciana1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agendamentos');
	}

}
