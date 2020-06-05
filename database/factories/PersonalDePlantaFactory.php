<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\Personal_de_Planta;
use Faker\Generator as Faker;
use Illuminate\Validation\Rules\Unique;

$factory->define(Personal_de_Planta::class, function (Faker $faker) {
    return [
        'CARGO' => $faker->jobTitle(),
        'idUSUARIO' => User::all()->unique()->random()->id,
    ];
});
