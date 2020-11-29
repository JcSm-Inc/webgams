<?php

use App\Models\actualizarStock;
use App\Models\Productos;
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
    //factory(actualizarStock::class, 20)->create();
    actualizarStock::create([
      'CANTIDAD' => 100,
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '1',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '3',
      'PU' => '5',
      'PROVEEDOR' => 'libreria Cyndy'
    ]);
    $producto = Productos::find(1);
    $producto->update(['STOCK' => (100 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/02/01',
      'idPRODUCTO' => '1',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '5',
      'PU' => '4',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(1);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '70',
      'FECHA' => '2020/04/01',
      'idPRODUCTO' => '1',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '8',
      'PU' => '5',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(1);
    $producto->update(['STOCK' => (70 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '100',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '2',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '10',
      'PU' => '1.50',
      'PROVEEDOR' => 'libreria Cyndy'
    ]);
    $producto = Productos::find(2);
    $producto->update(['STOCK' => (100 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '90',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '2',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '5',
      'PU' => '4',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(2);
    $producto->update(['STOCK' => (90 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/03/23',
      'idPRODUCTO' => '2',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '8',
      'PU' => '5',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(2);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '150',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '3',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '15',
      'PU' => '2',
      'PROVEEDOR' => 'libreria Cyndy'
    ]);
    $producto = Productos::find(3);
    $producto->update(['STOCK' => (150 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '90',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '3',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '17',
      'PU' => '4',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(3);
    $producto->update(['STOCK' => (90 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/03/23',
      'idPRODUCTO' => '3',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '20',
      'PU' => '5',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(3);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '150',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '4',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '21',
      'PU' => '12.50',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(4);
    $producto->update(['STOCK' => (150 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '157',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '4',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '23',
      'PU' => '15',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(4);
    $producto->update(['STOCK' => (157 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '250',
      'FECHA' => '2020/03/23',
      'idPRODUCTO' => '4',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '25',
      'PU' => '15',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(4);
    $producto->update(['STOCK' => (250 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '300',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '5',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '21',
      'PU' => '10',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(5);
    $producto->update(['STOCK' => (300 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '157',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '5',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '23',
      'PU' => '15',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(5);
    $producto->update(['STOCK' => (157 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '250',
      'FECHA' => '2020/03/23',
      'idPRODUCTO' => '5',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '25',
      'PU' => '15',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(5);
    $producto->update(['STOCK' => (250 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '90',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '6',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '28',
      'PU' => '8',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(6);
    $producto->update(['STOCK' => (90 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '157',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '6',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '30',
      'PU' => '8',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(6);
    $producto->update(['STOCK' => (157 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '250',
      'FECHA' => '2020/03/23',
      'idPRODUCTO' => '6',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '33',
      'PU' => '8',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(6);
    $producto->update(['STOCK' => (250 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '85',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '7',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '35',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(7);
    $producto->update(['STOCK' => (85 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '157',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '7',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '38',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(7);
    $producto->update(['STOCK' => (157 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '250',
      'FECHA' => '2020/03/23',
      'idPRODUCTO' => '7',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '38',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(7);
    $producto->update(['STOCK' => (250 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '125',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '8',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '40',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(8);
    $producto->update(['STOCK' => (125 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '190',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '8',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '41',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(8);
    $producto->update(['STOCK' => (190 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '420',
      'FECHA' => '2020/07/04',
      'idPRODUCTO' => '8',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '42',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(8);
    $producto->update(['STOCK' => (420 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '350',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '9',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '43',
      'PU' => '5',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(9);
    $producto->update(['STOCK' => (350 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '12O',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '9',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '35',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(9);
    $producto->update(['STOCK' => (120 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '490',
      'FECHA' => '2020/07/04',
      'idPRODUCTO' => '9',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '42',
      'PU' => '25',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(9);
    $producto->update(['STOCK' => (490 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '80',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '10',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '5',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(10);
    $producto->update(['STOCK' => (80 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '12O',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '10',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '35',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(10);
    $producto->update(['STOCK' => (120 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/07/04',
      'idPRODUCTO' => '10',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '42',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(10);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '80',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '10',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '5',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(10);
    $producto->update(['STOCK' => (80 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '12O',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '10',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '35',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(10);
    $producto->update(['STOCK' => (120 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/07/04',
      'idPRODUCTO' => '11',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '42',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(11);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '80',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '11',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '5',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(11);
    $producto->update(['STOCK' => (80 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '12O',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '11',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '35',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(11);
    $producto->update(['STOCK' => (120 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/07/04',
      'idPRODUCTO' => '11',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '42',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(11);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '80',
      'FECHA' => '2019/12/01',
      'idPRODUCTO' => '12',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '7',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Pepoya'
    ]);
    $producto = Productos::find(12);
    $producto->update(['STOCK' => (80 + $producto->STOCK)]);

    actualizarStock::create([
      'CANTIDAD' => '12O',
      'FECHA' => '2020/02/11',
      'idPRODUCTO' => '12',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '35',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Kantuta'
    ]);
    $producto = Productos::find(12);
    $producto->update(['STOCK' => (120 + $producto->STOCK)]);
    actualizarStock::create([
      'CANTIDAD' => '50',
      'FECHA' => '2020/07/04',
      'idPRODUCTO' => '12',
      'idUSER' => '3',
      'NRO_DOCUMENTO' => '42',
      'PU' => '7',
      'PROVEEDOR' => 'libreria Brasil'
    ]);
    $producto = Productos::find(12);
    $producto->update(['STOCK' => (50 + $producto->STOCK)]);
  }
}
