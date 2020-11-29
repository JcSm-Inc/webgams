<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GAMS</title>
    <link rel="shorcut icon" type="image/x-icon" href="{{asset(getenv('DIR_PUBLIC').'extras/img/aplicacion/ico_gams.ico')}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('MDB/css/mdb.min.css')}}" />

    <link href="css/styles.css" rel="stylesheet" />
    <link href="{{asset('csss/app.css')}}" rel="stylesheet" />
    <!-- Your custom styles (optional) 
    <link rel="stylesheet" href="MBD/css/style.css" />-->
</head>

<body >
    <header class=" bg-cover bg-fixed border-t-2 border-blue-600 h-full" style="background-image: url('../extras/page_image/PRINCIPAL.jpeg');">
        <div class="content px-0 py-1">
            <nav class="flex items-center fixed w-full bg-gray-800 bg-opacity-80 justify-between">
                <div class="w-20 order-first">
                    <img src="{{asset('extras\img\aplicacion\escudosoracachi.png')}}"
                    style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);" alt="" class="rounded">
                  </div>
                <div class="auth flex items-center">
                <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="{{route('welcome')}}">INICIO</a>
                    <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="#">ENTIDAD</a>
                <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="{{route('comunicados.indexweb')}}">NOTICIAS</a>
                    <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="#">CONTACTOS</a>
                    <a class="bg-green-900 hover:no-underline text-green-200  py-2 px-4 mx-2 rounded  hover:bg-green-800 hover:text-green-100" href="{{ route('login') }}">Ingresar</a>
                    <a class="bg-green-900 hover:no-underline text-green-200  py-2 px-4 mx-2 mr-4 rounded  hover:bg-green-800 hover:text-green-100" href="{{ route('register') }}">Registrar</a>
                </div>
            </nav>
            <div class="content">
                @yield('contenido')
            </div>
        </div>
    </header>

 <div class="bg-gray-100 pt-2 ">
    <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col
       md:flex-row max-w-6xl">
       <div class="mt-2">© Copyright 2020. Todos los derechos reservados.</div>
       <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
 
          <a href="/#" class="w-6 mx-1">
             <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                   5.373,-12 12,-12c6.627,0 12,5.373
                   12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                   0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                   -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
             </svg>
          </a>

       </div>
    </div>
 </div>


        <!-- Content Wrapper. Contains page content -->

    <!-- ./wrapper -->
    <!--@ yield('scripts')-->
    <script type="text/javascript" src="js/app.js"></script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script src="{{asset('js/subirimagen.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
        $(document).on('change', '#FOTO', function(){
            readImage(this);});});


    </script>


    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline 
    <script src="plugins/sparklines/sparkline.js"></script>-->
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) 
    <script src="dist/js/pages/dashboard.js"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

        <!-- TEMAS MDB-->
    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('MDB/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('MDB/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('MDB/js/bootstrap.min.js')}}"></script> 
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('MDB/js/mdb.min.js')}}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>