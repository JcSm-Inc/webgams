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
       // factory(Personal_de_Planta::class, 20)->create();
       User::create([
       'CARGO' => 'ALCALDE MUNICIPAL',
       'idUSUARIO' => '1',
       ]);
       User::create([
        'CARGO' => 'SECRETARIO MINICIPAL ADMISTRATIVO Y DE DESARROLLO INSTITUCIONAL',
        'idUSUARIO' => '2',
        ]);
        User::create([
            'CARGO' => 'RESPONSABLE DE ALMACENES',
            'idUSUARIO' => '3',
            ]);
            User::create([
                'CARGO' => 'SECRETARIO MINICIPAL PLANIFICASION Y OBRAS PUBLICAS',
                'idUSUARIO' => '4',
                ]);
                User::create([
                    'CARGO' => 'DIRECTOR ORDENAMINETO TERRITORIAL',
                    'idUSUARIO' => '5',
                    ]);
                    User::create([
                        'CARGO' => 'DIRECTOR DE RECURSOS HIDRICOS Y AGROPECUARIA',
                        'idUSUARIO' => '6',
                        ]);
                        User::create([
                            'CARGO' => 'DIRECTOR DE MAQUINARIA TRAFICO Y VIALIDAD',
                            'idUSUARIO' => '7',
                            ]);
                            User::create([
                                'CARGO' => 'DIRECTOR DE DESARROLLO HUMANO',
                                'idUSUARIO' => '8',
                                ]);
                                User::create([
                                    'CARGO' => 'DIRECTOR ADMINISTRATIVO Y FINANCIERA',
                                    'idUSUARIO' => '9',
                                    ]);
                                    User::create([
                                        'CARGO' => 'DIRECTOR  DE ASUNTOS JURIDICOS',
                                        'idUSUARIO' => '10',
                                        ]);
                                        User::create([
                                            'CARGO' => 'CONTADORA',
                                            'idUSUARIO' => '11',
                                            ]);
    }
}
