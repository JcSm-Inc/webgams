<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comunicado;
use App\Models\Personal_de_Planta;
use Faker\Generator as Faker;

$factory->define(Comunicado::class, function (Faker $faker) {
    return [
        'FECHA'=>$faker->date(),
        'TITULO'=>$faker->sentence($nbWords=5),
        'DESCRIPCION'=>$faker->sentence($nbWords=30),
        'idPERSONAL_DE_PLANTA'=>Personal_de_Planta::all()->random()->id,
    ];
});
