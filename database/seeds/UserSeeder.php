<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        User::create([
            'nick' => 'OSCAR',
            'email' => 'oscar@gmail.com',
            'email_verified_at' => '1968/12/05',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '4061782',
            'NOMBRES' => 'OSCAR',
            'APELLIDOS' => 'FLORES ADRIAN',
            'FECHANACIMIENTO' => '1968/12/05',
            'FOTO' => 'storage/img/users/U1.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'FREDDY',
            'email' => 'freddy@gmail.com',
            'email_verified_at' => '1968/12/05',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3096102',
            'NOMBRES' => 'FREDDY',
            'APELLIDOS' => 'SUARES CAMARGO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U2.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
    }
}
