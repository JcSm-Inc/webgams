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
    <!-- Your custom styles (optional) 
    <link rel="stylesheet" href="MBD/css/style.css" />-->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links-->
            <!-- boton de barra de navegador--> 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contactos</a>
                </li>
            </ul>

            <!-- FORMULARIO BUSCAR -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
                    </div>
                </div>
            </form>
        @auth
        <ul class="navbar-nav ml-auto">





            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <img src="{{Auth::user()->FOTO}}" alt="User Avatar" class="img-size-32 mr-0 img-circle mb-1 mt-0">
                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div class="media-body mt-2 ml-2 text-center">
                                <img src="{{Auth::user()->FOTO}}" alt="User Avatar" class="img-size-50 mr-3 img-circle ">
                                <a href=""><span class="float-none text-sm text-muted"><i class="fas fa-camera"></i></span></a>
                                <h2 class="dropdown-item-title ">
                                 <strong>   {{Auth::user()->nick}}</strong>
                                </h2>
                                <div class="dropdown-divider mt-1 mb-1"></div>
                                <p class="text-sm ">CI:{{' '.Auth::user()->CI}}</p>
                                <p class="text-sm">{{Auth::user()->NOMBRES.' '.Auth::user()->APELLIDOS}}</p>
                                <p class="text-sm">Email:{{' '.Auth::user()->email}}</p>
                                <p class="text-sm">Fecha de nac.:{{' '.Auth::user()->FECHANACIMIENTO}}</p>
                                <p class="text-sm text-muted">{{Auth::user()->TIPO}}</p>
                                <div class="dropdown-divider mt-1 mb-1"></div>
                                <a href="#" class="btn btn-light">Gestionar cuenta</a>
                                <div class="dropdown-divider mt-1 mb-1"></div>
                                <a class="btn btn-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                </div>
            </li>  
            @else
            <ul class="navbar-nav ml-auto">
                <div class="top-right links">        
                        <li class="nav-item d-none d-sm-inline-block">
                                <a  class="nav-link" href="{{ route('login') }}">
                                    
                                    <p>
                                        <i class="right fas fa-user"></i>
                                        Ingresar
                                    </p>
                                </a>

                        </li>
            @if (Route::has('register'))
                        <li class="nav-item d-none d-sm-inline-block">
                            <a  class="nav-link" href="{{ route('register') }}">
                                <p>
                                    <i class="right fas fa-user-plus"></i>
                                    Registrar
                                </p>
                            </a>
                        </li>
            @endif
        @endauth
                </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- CONTENEDOR PRINCIPAL DEL MENU LATERAL 
        <aside class="main-sidebar sidebar-dark-primary elevation-4">-->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">G.A.M. SORACACHI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                

                <!-- Sidebar Menu -->
                <nav class="mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">GENERAL</li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">

                                <i class="nav-icon fas fa-landmark"></i>
                                <p>
                                    Acerca de la Entidad
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="fas fa-book-dead nav-icon"></i>
                                        <p>Historia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="fas fa-street-view nav-icon"></i>
                                        <p>Mision, Vision y Objetivos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-paper-plane nav-icon"></i>
                                        <p>Plan Operativo Anual</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Comunicados
                                    <span class="right badge badge-danger">Nuevos</span>
                                </p>
                            </a>
                        </li>


                        <li class="nav-header">SISTEMA</li>

                        
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Registrar
                                </p>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
                @yield('contenido')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="#">Soft-JC-SMM</a>.</strong> Todos los derechos reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
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

    <script src="js/scripts.js"></script>
</body>

</html>