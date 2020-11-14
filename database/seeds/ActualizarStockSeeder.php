<?php

use App\Models\actualizarStock;
use Illuminate\Database\Seeder;

class ActualizarStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(actualizarStock::class, 20)->create();
    }
}
