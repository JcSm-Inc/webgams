<?php

use Illuminate\Database\Seeder;

class EntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Entrega::class, 10)->create()->each(function ($entrega) {
            $entrega->detalleentrega()->createMany(factory(App\Models\DetalleEntrega::class, rand(1, 15))->make()->toArray());
        });
    }
}
