<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ProductosTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
    /**
     * @test
     */

    public function Nuevo_Producto()
    {
        $this->withoutExceptionHandling();
        $this->post(route('productos.store'), [
            'CODPROD'    => 'CR3452',
            'NOMBRE'    => 'as',
            'DESCRIPCION' => '',
            'TIPO'      => 'MATERIAL DE ESCRITORIO',
            'FOTO'      => 'none',
            'STOCK'     => '532213'
        ]); //->assertStatus(200);
        $this->assertDatabaseHas('productos', [
            'CODPROD'    => 'CR3452',
            'NOMBRE'    => 'as',
            'DESCRIPCION' => '',
            'TIPO'      => 'MATERIAL DE ESCRITORIO',
            'FOTO'      => 'none',
            'STOCK'     => '532213'
        ]);
    }
}
