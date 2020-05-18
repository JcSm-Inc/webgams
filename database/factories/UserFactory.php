<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    $sexo=$faker->boolean();
    if($sexo)  $nombres=$faker->firstNameMale();
    else $nombres=$faker->firstNameFemale();
    return [
        'nick' => $faker->unique()->userName(),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'CI'=>$faker->unique()->ean8(),
        'NOMBRES'=>$nombres,
        'APELLIDOS'=>$faker->lastName(),
        'FECHANACIMIENTO'=>$faker->date(),
        'FOTO'=>'none',
        'GENERO'=>$sexo,
        'TIPO'=>'USUARIO EXTERNO',
        'remember_token' => Str::random(10),
    ];
});
