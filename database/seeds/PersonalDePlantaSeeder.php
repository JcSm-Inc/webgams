<?php

use App\Models\Personal_de_Planta;
use Illuminate\Database\Seeder;

class PersonalDePlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Personal_de_Planta::class, 20)->create();
        // factory(Personal_de_Planta::class, 20)->create();
        Personal_de_Planta::create([
            'CARGO' => 'ALCALDE MUNICIPAL',
            'idUSUARIO' => '1',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'SECRETARIO MINICIPAL ADMISTRATIVO Y DE DESARROLLO INSTITUCIONAL',
            'idUSUARIO' => '2',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'RESPONSABLE DE ALMACENES',
            'idUSUARIO' => '3',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'SECRETARIO MINICIPAL PLANIFICASION Y OBRAS PUBLICAS',
            'idUSUARIO' => '4',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'DIRECTOR ORDENAMINETO TERRITORIAL',
            'idUSUARIO' => '5',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'DIRECTOR DE RECURSOS HIDRICOS Y AGROPECUARIA',
            'idUSUARIO' => '6',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'DIRECTOR DE MAQUINARIA TRAFICO Y VIALIDAD',
            'idUSUARIO' => '7',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'DIRECTOR DE DESARROLLO HUMANO',
            'idUSUARIO' => '8',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'DIRECTOR ADMINISTRATIVO Y FINANCIERA',
            'idUSUARIO' => '9',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'DIRECTOR  DE ASUNTOS JURIDICOS',
            'idUSUARIO' => '10',
        ]);
        Personal_de_Planta::create([
            'CARGO' => 'CONTADORA',
            'idUSUARIO' => '11',
        ]);
    }
}
