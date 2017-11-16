<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome_completo', 45);
			$table->date('dt_nascimento');
			$table->enum('sexo', array('m','f'));
			$table->bigInteger('cpf')->unsigned()->nullable();
			$table->bigInteger('telefone')->unsigned()->nullable();
			$table->bigInteger('celular')->unsigned();
			$table->string('email', 45)->unique('email');
			$table->string('password', 100);
			$table->enum('perfil', array('1','2'))->nullable()->default('1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
