<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <style>
        @page { margin: 90px 50px; }
        #header { position: fixed; left: 0px; top: -90px; right: 0px; height: 90px; background-color: orange; text-align: center; }
        #footer { position: fixed; left: 0px; bottom: -90px; right: 0px; height: 90px; background-color: lightblue; text-align: right; }
        #footer .page:after { content: counter(page, arabic); }
      </style>
</head>

<body>
    <div id="header">
        <h1>Listado de Productos</h1>
    </div>
    <div id="footer">
        <p class="page">Pagina </p>
    </div>
    <main>
<table border=1 cellspacing=0 cellpadding=2 bordercolor="#666633">
    <thead>
        <tr>
            <th width="10px">
                Imagen
            </th>
            <th width="10px" scope="col"> CODPROD </th>     
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">TIPO</th>
            <th scope="col">CANTIDAD</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>
                    <img src="{{asset($producto->FOTO)}}" alt="User Avatar" width="40" height="40">
                </td>
                <td>{{$producto->CODPROD}}</td> 
                <td>{{$producto->NOMBRE}}</td>
                <td>{{$producto->DESCRIPCION}}</td>
                <td>{{$producto->TIPO}}</td>
                <td>{{$producto->STOCK}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </main>

</body>
</html>