<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {
    $foto = "./extras/img/productos/";
    $num = $faker->numberBetween($min = 1, $max = 17);
    $foto = $foto . $num . '.png';
    return [
        'CODPROD' => $faker->unique()->bothify('??###'),
        'NOMBRE' => $faker->word(),
        'DESCRIPCION' => $faker->sentence($nbWords = 4),
        'TIPO' => $faker->word(),
        'FOTO' => $foto,
        'STOCK' => $faker->numberBetween($min = 10, $max = 300)
    ];
});
