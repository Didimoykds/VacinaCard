<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
                $table->integer('id', true);
                $table->string('nome', 45);
                $table->string('email')->unique();
                $table->string('cpf', 11)->unsigned()->nullable();
    			$table->string('telefone', 10)->unsigned()->nullable();
    			$table->string('celular', 11)->unsigned();
                $table->date('dataNasc');
                $table->enum('genero', array('m','f'));
                $table->string('senha');
                $table->enum('perfil', array('administrador','usuario'))->nullable()->default('usuario');
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
