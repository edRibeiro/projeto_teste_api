<?php

use Faker\Generator as Faker;

$factory->define(\App\Establishment::class, function (Faker $faker) {
    $faker->addProvider(new \JansenFelipe\FakerBR\FakerBR($faker));
    return [
        'NomeFantasia' => $faker->company,
        'RazaoSocial' => $faker->company,
        'CNPJ' => $faker->cnpj,
        'Email' => $faker->companyEmail,
        'Telefone' => $faker->phoneNumber
    ];
});
