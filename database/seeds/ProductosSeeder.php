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
            'UNIDAD' => 'CAJAS',
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
            'UNIDAD' => 'CAJA',
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
            'DESCRIPCION' => 'BORRADOR P/LAPIZ GOMA',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME9.jfif',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME10',
            'NOMBRE' => 'TINTA PARA TAMPON',
            'DESCRIPCION' => 'TINTA PARA TAMPON COLOR NEGRO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'FRASCO',
            'FOTO' => 'storage/img/productos/ME10.jfif',
            'STOCK' => '0'
        ]);

        Productos::create([
            'CODPROD' => 'ME11',
            'NOMBRE' => 'TINTA PARA TAMPON',
            'DESCRIPCION' => 'TINTA PARA TAMPON COLOR ROJO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'FRASCO',
            'FOTO' => 'storage/img/productos/ME11.jpg',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME12',
            'NOMBRE' => 'TINTA PARA TAMPON',
            'DESCRIPCION' => 'TINTA PARA TAMPON COLOR AZUL',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'FRASCO',
            'FOTO' => 'storage/img/productos/ME12.jpg',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME13',
            'NOMBRE' => 'HOJAS BOND',
            'DESCRIPCION' => 'HOJAS BOND TAMAÑO CARTA',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'PAQUETE',
            'FOTO' => 'storage/img/productos/ME13.jpeg',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME14',
            'NOMBRE' => 'HOJAS BOND',
            'DESCRIPCION' => 'HOJAS BOND TAMAÑO OFICIO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'PAQUETE',
            'FOTO' => 'storage/img/productos/ME14.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME15',
            'NOMBRE' => 'HOJAS BOND COLOR',
            'DESCRIPCION' => 'HOJAS BOND TAMAÑO CARTA',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'PAQUETE',
            'FOTO' => 'storage/img/productos/ME15.JPG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME16',
            'NOMBRE' => 'BOLIGRAFO AZUL',
            'DESCRIPCION' => 'BOLIGRAFO AZUL',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME16.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME17',
            'NOMBRE' => 'BOLIGRAFO ROJO',
            'DESCRIPCION' => 'BOLIGRAFO ROJO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME17.JPG',
            'STOCK' => '0'
        ]);

        Productos::create([
            'CODPROD' => 'ME18',
            'NOMBRE' => 'BOLIGRAFO NEGRO',
            'DESCRIPCION' => 'BOLIGRAFO NEGRO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME18.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME19',
            'NOMBRE' => 'LAPIZ NEGRO',
            'DESCRIPCION' => 'LAPIZ NEGRO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME19.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME20',
            'NOMBRE' => 'LAPIZ ROJO',
            'DESCRIPCION' => 'LAPIZ ROJO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME19.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME21',
            'NOMBRE' => 'CORRECTOR DE CINTA',
            'DESCRIPCION' => 'CORRECTOR DE CINTA',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME20.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME22',
            'NOMBRE' => 'POSIT DIFERENTES COLORES',
            'DESCRIPCION' => 'POSIT DIFERENTES COLORES',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME22.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME23',
            'NOMBRE' => 'PEGAMENTO ISOCOLA',
            'DESCRIPCION' => 'PEGAMENTO ISOCOLA MEDIANO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME23.JPG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME24',
            'NOMBRE' => 'PEGAMENTO UHU',
            'DESCRIPCION' => 'PEGAMENTO UHU',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME24.PNG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME25',
            'NOMBRE' => 'FOLDER AMARILLO',
            'DESCRIPCION' => 'FOLDER AMARILLO TAMAÑO OFICIO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME16.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME26',
            'NOMBRE' => 'CUADERNO ESPERIRAL OFICIO',
            'DESCRIPCION' => 'CUADERNO ESPERIRAL TAMAÑO OFICIO',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME26.JPG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME27',
            'NOMBRE' => 'PESTAÑAS PLASTICAS',
            'DESCRIPCION' => 'PESTAÑAS PLASTICAS',
            'TIPO' => 'MATERIAL DE ESCRITORIO',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME27.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME28',
            'NOMBRE' => 'AMBIENTADOR',
            'DESCRIPCION' => 'AMBIENTADOR DIFERENTES AROMAS',
            'TIPO' => 'MATERIAL DE LIMPIEZA',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME28.JPG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME29',
            'NOMBRE' => 'FRANELA 30*30',
            'DESCRIPCION' => 'FRANELA 30*30',
            'TIPO' => 'MATERIAL DE LIMPIEZA',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME29.JFIF',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME30',
            'NOMBRE' => 'SANITIZADOR DE MANOS',
            'DESCRIPCION' => 'SANITIZADOR DE MANOS',
            'TIPO' => 'MATERIAL DE LIMPIEZA',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos30.JPG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME31',
            'NOMBRE' => 'OLA MULTIUSO PARA COMPUTADOR',
            'DESCRIPCION' => 'SANITVOLA MULTIUSO PARA COMPUTADOR',
            'TIPO' => 'MATERIAL DE LIMPIEZA',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME31.JPG',
            'STOCK' => '0'
        ]);
        Productos::create([
            'CODPROD' => 'ME32',
            'NOMBRE' => 'OVERON',
            'DESCRIPCION' => 'OBEROL',
            'TIPO' => 'ACCESORIOS',
            'UNIDAD' => 'UNIDAD',
            'FOTO' => 'storage/img/productos/ME32.JPG',
            'STOCK' => '0'
        ]);
    }
}
