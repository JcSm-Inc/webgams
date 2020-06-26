<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
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
    <p align="right"><br>Soracachi, {{(new Carbon\Carbon($reserva->FECHARESERVA))->isoFormat('LL')}}<br></p>
    <p><br>A:  &nbsp;&nbsp;&nbsp; H.Oscar Flores Adrián <br>
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALCALDE MUNICIPAL  DE  SORACACHI</strong><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lic.  Juan José Chacón Bozo<br>	
         <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STRIO. MUNICIPAL ADMINISTRATIVO<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Y DE DESARROLLO INSTITUCIONAL.</strong><br><br>
           <strong> De:</strong>&nbsp;&nbsp;&nbsp;{{Auth::user()->NOMBRES.' '.Auth::user()->APELLIDOS}}<br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>{{AUTH::user()->personal_de_planta->CARGO}}</strong>
    </p>
<p align="right"><strong>ref.<u> SOLICITUD  DE MATERIAL PARA EL AREA {{AUTH::user()->personal_de_planta->CARGO}}</u><br><br></strong></p>
<p align="justify">    De mi mayor consideración:<br><br>
    Mediante la presente le hago llegar un saludo respetuoso a su Autoridad, al mismo tiempo quiero desearle éxitos en la delicada labor que desempeña en beneficio del Municipio.<br><br>
    El motivo de la  presente es para solicitar mediante el área correspondiente Material de  Trabajo   para el area de {{AUTH::user()->personal_de_planta->CARGO}} del G.A.M. SORACACHI para lo cual doy el siguiente detalle:
    
</p>
<p align="center"><strong>DETALLE</strong></p>
        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#666633">
            <thead>
                <tr>
                    <th width="10px" scope="col"> CODPROD </th>     
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">CANTIDAD</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detallereserva as $item)
                    <tr>
                        <td align="center">{{$item->productos->CODPROD}}</td> 
                        <td>{{$item->productos->NOMBRE}}</td>
                        <td>{{$item->productos->DESCRIPCION}}</td>
                        <td align="center">{{$item->CANTIDAD}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p><br>Sin otro particular me despido con las consideraciones más distinguidas.<br><br>
            Atentamente.<br><br>
        </p>
        
    </main>

</body>
</html>