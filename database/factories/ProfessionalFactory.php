<?php

use Faker\Generator as Faker;

$factory->define(\App\Professional::class, function (Faker $faker) {
    $faker->addProvider(new \JansenFelipe\FakerBR\FakerBR($faker));
    return [
        'nome' => $faker->name,
        'cpf' =>  $faker->cpf,
        'cnpj' => $faker->cnpj
    ];
});
