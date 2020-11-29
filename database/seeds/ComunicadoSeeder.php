<?php

use App\Models\Comunicado;
use Illuminate\Database\Seeder;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comunicado::class, 200)->create();
        /*Comunicado::create([
            'FECHA' => '2020/01/20',
            'TITULO' => 'Alcalde Municipal',
            'DESCRIPCION' => 'H. Oscar Flores Adrian',
            'idPERSONAL_DE_PLANTA' => '4',
        ]);
        Comunicado::create([
            'FECHA' => '2020/01/20',
            'TITULO' => 'Alcalde Municipal',
            'DESCRIPCION' => 'H. Oscar Flores Adrian',
            'idPERSONAL_DE_PLANTA' => '4',
        ]);*/
    }
}
