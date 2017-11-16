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
                $table->string('name', 45);
                $table->string('email')->unique();
                $table->bigInteger('cpf')->unsigned()->nullable();
    			$table->bigInteger('telephone')->unsigned()->nullable();
    			$table->bigInteger('cellphone')->unsigned();
                $table->date('birthday');
                $table->enum('gender', array('m','f'));
                $table->string('password');
                $table->enum('profile', array('1','2'))->nullable()->default('1');
                $table->rememberToken();
                $table->timestamps();
        });

        DB::statement('ALTER TABLE users CHANGE cpf cpf BIGINT(11) UNSIGNED ZEROFILL');
        DB::statement('ALTER TABLE users CHANGE telephone telephone BIGINT(10) UNSIGNED ZEROFILL');
        DB::statement('ALTER TABLE users CHANGE cellphone cellphone BIGINT(11) UNSIGNED ZEROFILL NOT NULL');
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
