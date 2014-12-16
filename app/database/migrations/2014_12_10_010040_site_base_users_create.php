<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiteBaseUsersCreate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Schema::create('users', function(Blueprint $table)
		Schema::create('users', function(Blueprint $table)
		{
			//id
			$table->increments('id');
			//nome
			$table->string('name', 30);
			//sobrenome
			$table->string('lastname', 60);
			//apelido
			$table->string('nickname', 20)->unique();
			//email
			$table->string('email', 100)->unique();
			//senha
			$table->string('password');
			//acesso
			$table->integer('access');
			//token
			$table->string('token')->unique();
			//token remember
			$table->string('remember_token', 100);
			//creado e atualizado
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
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

}
