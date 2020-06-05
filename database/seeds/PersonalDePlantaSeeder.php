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
        factory(Personal_de_Planta::class, 10)->create();
    }
}
