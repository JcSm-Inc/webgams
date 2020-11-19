<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <style>
        @page { margin-top: 130px; margin-bottom: 80px;margin-left: 100px; margin-right: 80px;  }
        #header { position: fixed; left: 0px; top: -130px; right: 0px; height: 90px; background-color: white; text-align: center; }
        #footer { position: fixed; left: 0px; bottom: -90px; right: 0px; height: 70px; background-color: white; text-align: right; }
        #footer .page:after { content: counter(page, arabic); }
        #h {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            line-height: 100%   /*esta es la propiedad para el interlineado*/
            color: #000;
            padding: 10px;
            }
      </style>
</head>

<body>
    <div id="header" >
        <table width="100%" >
            <tr>
                <th align="left">
                    <img src="{{asset('./extras/img/aplicacion/escudosoracachi.png')}}" alt="User Avatar" width="80" height="80">
                </th>
                <th class="text-center" id="h">
                    <h6><font size="12">Gobierno Autonomo Municipal de Soracachi</font><br> seccion Paria- Provincia Cercado<br>ORURO- BOLIVIA</h6>
                    <hr>
                </th>  
                <th align="right">
                    <img src="{{asset('./extras/img/aplicacion/escudobolivia.png')}}" alt="User Avatar" width="80" height="80">
                </th>
            </tr>
        
        </table>
        
            
    </div>
    <div id="footer">
        <p class="page">Pagina </p>
    </div>
    <main>
    <p align="right">Soracachi, {{(new Carbon\Carbon(now()))->isoFormat('LL')}}<br></p>
<h3 align="center"><strong>RESUMEN DE CONSOLIDADO POR PRODUCTO<br><br></strong></h3>
        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633">
            <thead>
                <tr>
                    <th  rowspan="2" width="10px"> COD. </th>     
                    <th rowspan="2">NOMBRE</th>
                    <th  rowspan="2">UNIDAD</th>
                    <th colspan="2">INVENTARIO INICIAL</th>
                    <th colspan="2">INGRESOS</th>
                    <th colspan="2">SALIDAS</th>
                    <th colspan="2">STOCK</th>
                </tr>
                <tr>
                                    
                    <th>UNID.</th>
                    <th>S/.</th>
                    <th>UNID.</th>
                    <th>S/.</th>
                    <th>UNID.</th>
                    <th>S/.</th>
                    <th>UNID.</th>
                    <th>S/.</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                   <td>{{$producto->CODPROD}}</td> 
                   <td>{{$producto->NOMBRE}}</td>
                   <td>{{$producto->UNIDAD}}</td>
                   <td>{{$producto->stockCantidadFecha('2019/12/31','<')-$producto->cantidadEntregado('2019/12/31','<')}}</td>
                   <td>{{$producto->stockPrecioFecha('2019/12/31','<')-$producto->stockPrecioEntregadoPeriodo('2019/12/31')}}</td>
                   <td>{{$producto->stockCantidadFecha(now(),'<')-$producto->stockCantidadFecha('2019/12/31','<')}}</td>
                   <td>{{$producto->stockPrecioFecha(now(),'<')-$producto->stockPrecioFecha('2019/12/31','<')}}</td>
                   <td>{{$producto->cantidadEntregado(now(),'<')-$producto->cantidadEntregado('2019/12/31','<')}}</td>
                   <td>{{$producto->stockPrecioEntregadoPeriodo(now())-$producto->stockPrecioEntregadoPeriodo('2019/12/31')}}</td>
                   <td>{{$producto->STOCK}}</td>
                   <td>{{$producto->stockPrecioFecha(now(),'<')-$producto->stockPrecioEntregadoPeriodo(now())}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </main>

</body> 
</html>
