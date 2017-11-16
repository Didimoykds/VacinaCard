<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAtendimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('atendimentos', function(Blueprint $table)
		{
			$table->foreign('fk_user', 'fk_atendimentos_pessoa1')->references('id')->on('usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('atendimentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_atendimentos_pessoa1');
		});
	}

}
