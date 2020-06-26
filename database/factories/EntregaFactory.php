<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entrega;
use App\Models\Personal_de_Planta;
use Faker\Generator as Faker;

$factory->define(Entrega::class, function (Faker $faker) {
    $personal = Personal_de_Planta::all()->random()->id;
    return [
        'FECHAENTREGA' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'ESTADO' => 'ENTREGADO',
        'idPERSONAL_DE_PLANTA' => $personal
    ];
});
