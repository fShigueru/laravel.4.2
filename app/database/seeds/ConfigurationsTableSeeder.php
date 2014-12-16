<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ConfigurationsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// Configuration::create(array(
  //           'configuracao' => 'site.nome',
  //           'valor' => 'Base Laravel'
  //       ));

		// foreach(range(1, 1) as $index)
		// {
		// 	Configuration::create([
		// 		'configuracao' => $faker->configuracao,
		// 		'valor' 	   => $faker->valor
		// 	]);
		// }

		$data = [
			'configuracao'  => 'site.versao',
			'valor' => '1.0'
		];

		$Configuration = new Configuration($data);
		$Configuration->save();
	}

}