<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\actualizarStock;
use App\Models\Productos;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(actualizarStock::class, function (Faker $faker) {
    return [
        'CANTIDAD' => $faker->numberBetween($min = 10, $max = 300),
        'FECHA' => $faker->date(),
        'idPRODUCTO' => Productos::all()->random()->id,
        'idUSER' => User::all()->random()->id,
        'NRO_DOCUMENTO' => $faker->unique()->ean8(),
        'PU' => $faker->randomFloat($nbMaxDecimals = 1, $min = 1000, $max = 100000),
        'PROVEEDOR' => $faker->company
    ];
});
