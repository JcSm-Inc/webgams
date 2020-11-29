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
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('MDB/css/mdb.min.css')}}" />

    <link href="{{asset('csss/app.css')}}" rel="stylesheet" />
    

    <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>

    <!-- Your custom styles (optional) 
    <link rel="stylesheet" href="MBD/css/style.css" />-->
</head> 

<body class="hold-transition sidebar-mini  layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image:url('/extras/page_image/yellow.jpg') ">
            <!-- Left navbar links-->
            <!-- boton de barra de navegador--> 
            <ul class="navbar-nav">
                <li class="nav-item text-white">
                    <a class="nav-link text-green-700" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link text-bold text-green-300">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link text-bold text-green-300">Contactos</a>
                </li>
            </ul>


        @auth
            
            <!-- NAVEGADOR DE LINKS DERECHO -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <div id="carrito"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                      <div id="listaitemreserva"></div>
                    </div>
                </li>




                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="view overlay zoom">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginAvatar">
                        <img src="{{asset(Auth::user()->FOTO)}}" alt="User Avatar" class="h-10 w-10 mr-0 img-circle mb-0 -mt-2">
                    </a>
                    </div>
                </li>   
                <!-- Notifications Dropdown Menu -->
                
                        
            @else
            <ul class="navbar-nav ml-auto">
                <div class="top-right links">        
                        <li class="nav-item d-none d-sm-inline-block">
                                <a  class="nav-link" href="{{ route('login') }}">
                                    
                                    <p>
                                        <i class="right fas fa-user"></i>
                                        Login
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
        <aside class="main-sidebar sidebar-light-blue elevation-4 bg-green-700 text-white">
            <!-- Brand Logo -->
            <a href="#" class="brand-link ">
                <img src="{{asset('extras/img/aplicacion/escudosoracachi.png')}}" alt="GAMS" class="brand-image bg-transparent  ">
                <span class="text-white">G.A.M. SORACACHI</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header text-white">GENERAL</li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link text-white">

                                <i class="nav-icon fas fa-landmark"></i>
                                <p>
                                    Acerca de la Entidad
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link text-white">
                                        <i class="fas fa-book-dead nav-icon"></i>
                                        <p>Historia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('mision_vision.index')}}" class="nav-link text-white">
                                        <i class="fas fa-street-view nav-icon"></i>
                                        <p>Mision, Vision y Objetivos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link text-white">
                                        <i class="far fa-paper-plane nav-icon"></i>
                                        <p>Plan Operativo Anual</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('comunicados.index')}}" class="nav-link text-white">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Comunicados
                                    <span class="right badge badge-danger">Nuevos</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-header text-white">SERVICIOS</li>

                        
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon fas fa-box-open"></i>
                                <p>
                                    Activos Fungibles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview text-white">

                                @can('productos.index')
                                <li class="nav-item text-white">
                                    <a href="{{ route('productos.index')}}" class="nav-link text-white">
                                        <i class="fas fa-box nav-icon"></i>
                                        <p>Administrar Productos</p>
                                    </a>
                                </li>
                                @endcan
                                @can('productos.edit')
                                <li class="nav-item text-white">
                                    <a href="{{ route('actualizarstock.index')}}" class="nav-link text-white">
                                        <i class="fas fa-luggage-cart  nav-icon"></i>
                                        <p>Ingreso de Producto</p>
                                    </a>
                                </li>
                                @endcan
                                
                                <li class="nav-item text-white">
                                <a href="{{route('reserva.create')}}" class="nav-link text-white">
                                        <i class="fas fa-cart-plus nav-icon"></i>
                                        <p>Reserva de Productos</p>
                                    </a>
                                </li>


                                <li class="nav-item text-white">
                                    <a href="{{ route('entregas.index')}}" class="nav-link text-white">
                                        <i class="fas fa-people-carry nav-icon"></i>
                                        <p>Entrega de Productos</p>
                                    </a>
                                </li>


                                <li class="nav-item text-white">
                                    <a href="{{route('reporte_almacen.saldoExistenciasProducto')}}" class="nav-link text-white">
                                        <i class="fas fa-book-reader nav-icon"></i>
                                        <p>Reportes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header text-white">SISTEMA</li>

                        <li class="nav-item text-white has-treeview">
                            <a href="#" class="nav-link text-white">

                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Configuracion
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            @can('roles.index')
                                <li class="nav-item text-white">
                                    <a href="{{ route('roles.index') }}" class="nav-link text-white">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>Administrar Roles</p>
                                    </a>
                                </li>
                            @endcan
                            </ul>
                            <ul class="nav nav-treeview">
                            @can('users.index')
                                <li class="nav-item text-white">
                                    <a href="{{ route('users.index') }}" class="nav-link text-white">
                                        <i class="fas fa-users-cog nav-icon"></i>
                                        <p>Administrar Roles de Usuarios</p>
                                    </a>
                                </li>
                            @endcan
                            </ul>

                        </li>

                        <li class="nav-item text-white has-treeview">
                            <a href="{{ route('logout') }}" class="nav-link text-white"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-door-open"></i>
                                <p>
                                    Salir                                    
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
            


            <!--Modal: Login with Avatar Form-->
            <div class="modal fade " id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-side modal-top-left" >
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                
              <!--Content-->
              <div class="modal-content">
            
                <!--Header-->
                <div class="modal-header">
                  <img src="{{asset(Auth::user()->FOTO)}}" alt="avatar" class="rounded-circle img-responsive">
                </div>
                <!--Body-->
                <div class="modal-body text-center mb-1">
            
                  <h5 class="mt-1 mb-2">{{Auth::user()->nick}}</h5>
            
                  <div class="md-form ml-0 mr-0">
                    <div class="dropdown-divider mt-1 mb-1"></div>
                    <p class="text-sm ">CI:{{' '.Auth::user()->CI}}</p>
                    <p class="text-sm">{{Auth::user()->NOMBRES.' '.Auth::user()->APELLIDOS}}</p>
                    <p class="text-sm">Email:{{' '.Auth::user()->email}}</p>
                    <p class="text-sm">Fecha de nac.:{{' '.Auth::user()->FECHANACIMIENTO}}</p>
                    <p class="text-sm text-muted">{{Auth::user()->TIPO}}</p>
                    <div class="dropdown-divider mt-1 mb-1"></div>
                                    <a href="#" class="btn btn-cyan mt-1">Gestionar cuenta</a>
                                    <div class="dropdown-divider mt-1 mb-1"></div>
                                    <a class="btn btn-cyan mt-1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>
                </div>
            
              </div>
              <!--/.Content-->
            </div>
            </div>
            </div>
                        <!-- Content Wrapper. Contains page content -->
                <!-- Content Header (Page header) -->
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">SW</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Sarai</li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                @if(session('info'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-md-offset-2">
                            <div class="alert alert-success">
                                {{session('info')}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <!-- Main content -->
                <!--Modal: Login with Avatar Form-->
                        @yield('contenido')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="#">Soft-SMM</a>.</strong> Todos los derechos reservados.
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
    <!-- ./wrapper--> 
    @yield('scripts')
    <!--  importando la libreria de react-->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    
    <script src="{{asset('js/subirimagen.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
        $(document).on('change', '#FOTO', function(){
            readImage(this);});});


    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline 
    <script src="plugins/sparklines/sparkline.js"></script>-->
    <!-- JQVMap -->
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) 
    <script src="dist/js/pages/dashboard.js"></script>-->
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>

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