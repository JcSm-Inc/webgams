<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {
    $foto = "./storage/img/productos/";
    $tipo = ['MATERIAL DE ESCRITORIO', 'MATERIAL DE LIMPIEZA', 'HERRAMIENTA', 'OTRO'];
    $num = $faker->numberBetween($min = 1, $max = 17);
    $foto = $foto . $num . '.png';
    return [
        'CODPROD' => $faker->unique()->bothify('??###'),
        'NOMBRE' => $faker->word(),
        'DESCRIPCION' => $faker->sentence($nbWords = 4),
        'TIPO' => $tipo[$faker->numberBetween($min = 0, $max = 3)],
        'FOTO' => $foto,
        'STOCK' => $faker->numberBetween($min = 10, $max = 300)
    ];
});
