<!DOCTYPE html>
<html>
<head>
    <title>Entrega de Productos</title>
    <style>
        @page { margin-top: 130px; margin-bottom: 80px;margin-left: 100px; margin-right: 80px;  }
        #header { position: fixed; left: 0px; top: -130px; right: 0px; height: 90px; background-color: white; text-align: center; }
        #footer { position: fixed; left: 0px; bottom: -90px; right: 0px; height: 90px; background-color: white; text-align: right; }
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
                    <h6><font size="12">Gobierno Autonomo Municipal de Soracachi</font><br> seccion- Provincia Cercado<br>ORURO- BOLIVIA</h6>
                    <hr>
                </th>  
                <th align="right">
                    <img src="{{asset('./extras/img/aplicacion/escudobolivia.png')}}" alt="User Avatar" width="80" height="80">
                </th>
            </tr>
        
        </table>
        
            
    </div>
    <div id="footer">
        <h6 align="left">
            c/Arch.
        </h6>
        <p class="page">Pagina </p>
    </div>
    <main>
        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633" style="width:100%">
            <tr>
                <td rowspan="3" align="center"><strong>ACTA DE ENTREGA Y CONFORMIDAD</strong> </td>
                <td width="150"><strong>Codigo de Entrega:</strong>{{$entrega->id}}</td>
                </tr>
            <tr>
                <td><strong>Fecha:</strong>{{(new Carbon\Carbon($entrega->FECHAENTREGA))->isoFormat('LL')}}</td>
            </tr>
            <tr>
                
                <td><strong>Gestion:</strong>{{(new Carbon\Carbon($entrega->FECHAENTREGA))->isoFormat('G')}}</td>
            </tr>
        </table>
    <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633" style="width:100%" >
        <tr>
            <td width="150px">ENTREGADO A:</td>
            <td colspan="2">{{$entrega->personal_de_planta->user->NOMBRES.' '.$entrega->personal_de_planta->user->APELLIDOS}}</td>
        </tr>
        <tr>
            <td width="150px" >CARGO:</td>
            <td colspan="2">{{$entrega->personal_de_planta->CARGO}}</td>
        </tr>
        <tr>
            <td width="150px">ENTREGADO POR:</td>
            <td colspan="2">{{Auth::user()->NOMBRES.' '.Auth::user()->APELLIDOS}}</td>
        </tr>
        <tr>
            <td width="150px">CARGO:</td>
            <td colspan="2">{{Auth::user()->personal_de_planta->CARGO}}</p></td>
        </tr>
        <tr>
            <td width="150px">OBSERVACIONES:</td>
            <td colspan="2" align="justify"><P>El presente documento certifica que la unidad de Almacenes del Gobierno Autonomo Municipal de Soracachi ENTREGÓ el siguiente material. </p></td>
        </tr>
    </table>
<p align="center"><strong>DETALLE DE ENTREGA</strong></p>
        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633" style="width:100%">
            <thead>
                <tr>
                    <th width="10px" scope="col"> CODIGO </th>     
                    <th width="10px" scope="col">NOMBRE</th>
                    <th width="30px" scope="col">DESCRIPCION</th>
                    <th width="10px" scope="col">UNIDAD</th>
                    <th width="8px" scope="col">CANTIDAD</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detalles as $item)
                    <tr>
                        <td align="center">{{$item->productos->CODPROD}}</td> 
                        <td><h5>{{$item->productos->NOMBRE}}</h5></td>
                        <td><h6>{{$item->productos->DESCRIPCION}}</h6></td>
                        <td align="center">{{$item->productos->UNIDAD}}</td>
                        <td align="center">{{$item->CANTIDAD}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table align="center" style="width:100%">
            <tr>
                <td align="center">......................................................</td>
                <td align="center">......................................................</td>
            </tr>
            <tr>
                <td align="center">ENTREGUE<br> CONFORME</td>
                <td align="center">RECIBI <br>CONFORME</td>
            </tr>
        </table>
        
    </main>

</body>
</html>