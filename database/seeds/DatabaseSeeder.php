<?php

use App\Models\Comunicado;
use App\Models\Personal_de_Planta;
use App\Models\Productos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(TablaPermisosSeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(ProductosSeeder::class);
        //$this->call(ComunicadoSeeder::class);
        $this->call(PersonalDePlantaSeeder::class);
    }
}
