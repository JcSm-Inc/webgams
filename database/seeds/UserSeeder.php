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
            'nick' => 'OSCAR_FA',
            'email' => 'OSCAR@GMAIL.COM',
            'email_verified_at' => 'OSCAR@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '4061782',
            'NOMBRES' => 'OSCAR',
            'APELLIDOS' => 'FLORES ADRIAN',
            'FECHANACIMIENTO' => '1968/12/05',
            'FOTO' => 'storage/img/user/U1.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO'
        ]);
        User::create([
            'nick' => 'FREDDY_SC',
            'email' => 'FREDY@GMAIL.COM',
            'email_verified_at' => 'FREDY@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3096102',
            'NOMBRES' => 'FREDDY',
            'APELLIDOS' => 'SUARES CAMARGO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/user/U2.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO'
        ]);
        User::create([
            'nick' => 'GUIDO_CB',
            'email' => 'GUIDO@GMAIL.COM',
            'email_verified_at' => 'GUIDO@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'GUIDO',
            'APELLIDOS' => 'CHOQUE BLANCO',
            'FECHANACIMIENTO' => '1990/12/28',
            'FOTO' => 'storage/img/users/U9.JPG',
            'GENERO' => 'FEMENINO',
            'TIPO' => 'USUARIO INTERNO'
        ]);
        User::create([
            'nick' => 'LUIS_MA',
            'email' => 'LUIS@GMAIL.COM',
            'email_verified_at' => 'LUIS@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3096102',
            'NOMBRES' => 'lUIS ALBERTO',
            'APELLIDOS' => 'MARTINEZ COLLARANA',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U3.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO'
        ]);
        User::create([
            'nick' => 'CARLOS_CR',
            'email' => 'CARLOS@GMAIL.COM',
            'email_verified_at' => 'CARLOS@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'CARLOS OSCAR',
            'APELLIDOS' => 'CALLE ROMERO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U4.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO'
        ]);
        User::create([
            'nick' => 'CARLOS_CA',
            'email' => 'CARLOSA@GMAIL.COM',
            'email_verified_at' => 'CARLOSA@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'CARLOS ',
            'APELLIDOS' => 'CONDORI ANTONIO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U5.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'ALBERTO_MJ',
            'email' => 'ALBERTO@GMAIL.COM',
            'email_verified_at' => 'ALBERTO@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'ALBERTO',
            'APELLIDOS' => 'MAMANI JANCO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U6.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'RAUL_VA',
            'email' => 'RAUL@GMAIL.COM',
            'email_verified_at' => 'RAUL@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'RAUL',
            'APELLIDOS' => 'VALENCIA ALANES',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/U7.JPG',
            'GENERO' => 'MASCULINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'VIRGINIA_AA',
            'email' => 'VIRGINIA@GMAIL.COM',
            'email_verified_at' => 'VIRGINIA@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'VIRGINIA JHENNY',
            'APELLIDOS' => 'APAZA ALCALA',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/UA1.JPG',
            'GENERO' => 'FEMENINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'MARIA_PM',
            'email' => 'MARIA@GMAIL.COM',
            'email_verified_at' => 'MARIA@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'MARIA LUIZA',
            'APELLIDOS' => 'PEREZ MERCADO',
            'FECHANACIMIENTO' => '1968/11/05',
            'FOTO' => 'storage/img/users/UA2.JPG',
            'GENERO' => 'FEMENINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'SARAI_MM',
            'email' => 'SARAI@GMAIL.COM',
            'email_verified_at' => 'SARAI@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'SARAI ESTHER',
            'APELLIDOS' => 'MAMANI MARTINEZ',
            'FECHANACIMIENTO' => '1995/12/28',
            'FOTO' => 'storage/img/users/UA3.JPEG',
            'GENERO' => 'FEMENINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'GABRIELA_MM',
            'email' => 'GABRIELA_@GMAIL.COM',
            'email_verified_at' => 'GABRIELA_@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'GABRIELA',
            'APELLIDOS' => 'MAMANI LUNA',
            'FECHANACIMIENTO' => '1995/12/28',
            'FOTO' => 'storage/img/users/UA4.JPG',
            'GENERO' => 'FEMENINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
        User::create([
            'nick' => 'GUIDO_CB',
            'email' => 'GUIDO@GMAIL.COM',
            'email_verified_at' => 'GUIDO@GMAIL.COM',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'CI' => '3107693',
            'NOMBRES' => 'GUIDO',
            'APELLIDOS' => 'CHOQUE BLANCO',
            'FECHANACIMIENTO' => '1990/12/28',
            'FOTO' => 'storage/img/users/U9.JPG',
            'GENERO' => 'FEMENINO',
            'TIPO' => 'USUARIO INTERNO',
        ]);
    }
}
