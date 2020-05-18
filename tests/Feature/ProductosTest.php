<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductosTest extends TestCase
{
    /**
     * @test
     */
    public function mostrarProductos()
    {
        
        $response = $this->call('GET',route('productos.index'));
        //$response->assertJsonStructure();
        $response->assertStatus(200);
    }
}
