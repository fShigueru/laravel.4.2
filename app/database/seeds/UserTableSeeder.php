<?php

class UserTableSeeder extends Seeder{
	
	//com o seeder criamos dados de teste para a tabela em quest�o
	//N�o esquecer de dar o php artisan dump-autoload
	public function run()
	{
		$data = [
			'name'      => 'Administrador',
			'lastname'  => 'Admin',
			'nickname'  => 'Admin',
			'email'		=> 'desenvolvimento@fshigueru.net',
			'password'  => Hash::make('123'),
			'access'	=> 1,
			'token'		=> 'asn127g3husb'
		];
		$user = new User($data);
		$user->save();
	}
}