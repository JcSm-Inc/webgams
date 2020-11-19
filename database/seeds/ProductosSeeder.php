<?php

use App\Models\Productos;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Productos::class, 50)->create();
        Productos::create([
            'CODPROD' => 'ME1',
            'NOMBRE' => 'CINTA EMBALAJE TRANSPARENTE 2 PULG',
            'DESCRIPCION' => 'CINTA EMBALAJE TRANSPARENTE 2 PULG',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'ROLLO',
            'FOTO' => 'storage/img/productos/ME1.png',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME2',
            'NOMBRE' => 'GOMA EN BARRA',
            'DESCRIPCION' => 'GOMA EN BARRA',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME2.png',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME3',
            'NOMBRE' => 'GOMA LIQUIDA TRANSPARENTE',
            'DESCRIPCION' => 'GOMA LIQUIDA TRANSPARENTE',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME3.jpg',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME4',
            'NOMBRE' => 'ARCHIVADOR DE PALANCA ',
            'DESCRIPCION' => '1/2 OF',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME4.jpg',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME5',
            'NOMBRE' => 'BINDER CLIP DE 1 1/4"  ( 32 MM )',
            'DESCRIPCION' => 'BINDER CLIP DE 1 1/4"  ( 32 MM )',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'CAJA',
            'FOTO' => 'storage/img/productos/ME5.png',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME6',
            'NOMBRE' => 'PERFORADOR GRANDE DE METAL',
            'DESCRIPCION' => 'PERFORADOR GRANDE DE METAL',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME6.jfif',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME7',
            'NOMBRE' => 'PLUMON DELGADO N°34 JGO X 12',
            'DESCRIPCION' => 'PLUMON DELGADO N°34 JGO X 12',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME7.jfif',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME8',
            'NOMBRE' => 'HOJAS BOND TAMAÑO OFICIO',
            'DESCRIPCION' => 'HOJAS BOND TAMAÑO OFICIO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'PAQUETE',
            'FOTO' => 'storage/img/productos/ME8.jfif',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME9',
            'NOMBRE' => 'BORRADOR P/LAPIZ',
            'DESCRIPCION' => 'BORRADOR P/LAPIZ',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME9.jfif',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME10',
            'NOMBRE' => 'TINTA PARA TAMPON',
            'DESCRIPCION' => 'TINTA PARA TAMPON',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'FRASCO',
            'FOTO' => 'storage/img/productos/ME10.jfif',
            'STOCK' => '0'
        ]);
    }
}
