<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DetalleEntrega;
use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(DetalleEntrega::class, function (Faker $faker) {
    return [
        'CANTIDAD' => $faker->numberBetween($min = 1, $max = 15),
        'idPRODUCTOS' => Productos::all()->random()->id
    ];
});
