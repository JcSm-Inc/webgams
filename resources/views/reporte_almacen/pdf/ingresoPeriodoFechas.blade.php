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
<h3 align="center"><strong>REPORTE DE LOS INGRESOS EN UN PERIODO DE FECHAS<br></strong></h3>


        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633">
            <tbody>
                
                <tr>
                    <td rowspan="8">
                        <img src="{{asset($producto->FOTO)}}" alt="User Avatar" width="120" height="120">
                    </td>
                    <td><strong>CODIGO DE PRODUCTO</strong></td>
                    <td>{{$producto->CODPROD}}</td>
                </tr>
                <tr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{$producto->NOMBRE}}</td>
                </tr>
                <tr>
                    <td><strong>DESCRIPCION</strong></td>
                    <td>{{$producto->DESCRIPCION}}</td>
                </tr>
                <tr>
                    <td><strong>UNIDAD</strong></td>
                    <td>{{$producto->UNIDAD}}</td>
                </tr>
                <tr>
                    <td><strong>TIPO</strong></td>
                    <td>{{$producto->TIPO}}</td>
                </tr>
                <tr>
                    <td><strong>STOCK</strong></td>
                    <td>{{$producto->STOCK}}</td>
                </tr>
                <tr>
                    <td><strong>FECHA INICIAL</strong></td>
                    <td>{{$fechaini}}</td>
                </tr>
                <tr>
                    <td><strong>FECHA FINAL</strong></td>
                    <td>{{$fechafin}}</td>
                </tr>
                
            </tbody>
        </table>
<h3 align="center"><strong>INGRESOS<br></strong></h3>


        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633">
            <thead>
                <tr>
                    <th  >FECHA</th>     
                    <th >NRO DOC.</th>
                    <th  >PROVEEDOR</th>
                    <th >P.U. [Bs]</th>
                    <th >CANTIDAD</th>
                    <th >SUBTOTAL [Bs]</th>
                </tr>
            </thead>
            <tbody>
                @php
                $cantTotal=0;
                $precioTotal=0;
                @endphp
            
            @foreach($actualizaciones as $stock)
                <tr>
                    <td>{{$stock->FECHA}}</td>
                   <td>{{$stock->NRO_DOCUMENTO}}</td> 
                   <td>{{$stock->PROVEEDOR}}</td>
                   <td>{{$stock->PU}}</td>
                   <td>{{$stock->CANTIDAD}}</td>
                   <td>{{$stock->CANTIDAD*$stock->PU}}</td>
                   @php
                        $cantTotal=$cantTotal+$stock->CANTIDAD;
                        $precioTotal=$precioTotal+$stock->CANTIDAD*$stock->PU;
                    @endphp
                   
                </tr>
            @endforeach
            <tr>
                <td colspan="3"></td>
                <td>TOTALES</td>
                <td>{{$cantTotal}}</td> 
                <td>{{$precioTotal.' Bs'}}</td>
            </tr>
            </tbody>
        </table>
        
    </main>

</body> 
</html>