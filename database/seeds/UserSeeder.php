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
        //factory(User::class,500)->create();
        User::create([
            'nick' => 'OSCAR',
            'email' => 'OSCAR@GMAIL.COM',
            'email_verified_at' => 'OSCAR@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '4061782',
            'NOMBRES' => 'OSCAR',
            'APELLIDOS' => 'FLORES ADRIAN',
            'FECHANACIMIENTO' => '1968/12/05',
            'FOTO' => 'storage/img/user/U1.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO EXTERNO',
        ])
        User::create([
            'nick' => 'FREDDY',
            'email' => 'FREDY@GMAIL.COM',
            'email_verified_at' => 'FREDY@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3096102',
            'NOMBRES' => 'FREDDY',
            'APELLIDOS' => 'SUARES CAMARGO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/user/U2.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO EXTERNO',
        ])
        User::create([
            'nick' => 'LUIS',
            'email' => 'LUIS@GMAIL.COM',
            'email_verified_at' => 'LUIS@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3096102',
            'NOMBRES' => 'FREDDY',
            'APELLIDOS' => 'SUARES CAMARGO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U2.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO EXTERNO',
        ])
    }
}
