<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comunicado;
use App\Models\Personal_de_Planta;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Comunicado::class, function (Faker $faker) {
    $titulo = $faker->sentence($nbWords = 5);
    return [
        'FECHA' => $faker->date(),
        'TITULO' => $titulo,
        'slug' => Str::slug($titulo),
        'DESCRIPCION' => $faker->sentence($nbWords = 30),
        'CONTENIDO' => $faker->text(500),
        'ARCHIVO' => $faker->imageUrl($width = 1200, $heigth = 400),
        'ESTADO' => $faker->randomElement(['BORRADOR', 'PUBLICADO']),
        'CATEGORIA' => $faker->randomElement(['CULTURA', 'DEPORTE', 'PLANIFICACION Y OBRAS', 'INSTITUCIONAL', 'SERVICIO DE IMPUESTOS']),
        'idPERSONAL_DE_PLANTA' => Personal_de_Planta::all()->random()->id,
    ];
});
