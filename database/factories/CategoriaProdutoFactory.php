<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategoriaProduto;
use Faker\Generator as Faker;

$factory->define(CategoriaProduto::class, function (Faker $faker) {

    return [
        'nome_categoria' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
