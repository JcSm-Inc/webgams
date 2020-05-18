<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {
    return [
        'CODPROD'=>$faker->unique()->bothify('??###'),
        'NOMBRE'=>$faker->word(),
        'DESCRIPCION'=>$faker->sentence($nbWords=4),
        'TIPO'=>$faker->word(),
        'FOTO'=>'none',
        'STOCK'=>$faker->numberBetween($min = 10, $max = 300)
    ];
});
