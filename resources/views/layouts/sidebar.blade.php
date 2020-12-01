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
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
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


    <link href="{{asset('csss/app.css')}}" rel="stylesheet" />
    <!-- Your custom styles (optional) 
    <link rel="stylesheet" href="MBD/css/style.css" />-->
</head>

<body >

<!-- component -->





    <header class=" bg-cover bg-fixed border-t-2 border-blue-600 h-full" style="background-image: url('../extras/page_image/PRINCIPAL.jpeg');">
        <div class="content px-0 py-1">
            <nav class="flex items-center fixed w-full bg-gray-800 bg-opacity-80 justify-between">
                <div class="w-20 order-first">
                    <img src="{{asset('extras\img\aplicacion\escudosoracachi.png')}}"
                    style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);" alt="" class="rounded">
                  </div>
                <div class="auth flex items-center">
                <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="{{route('welcome')}}">Inicio</a>

                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="bg-green-700  bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700">
                          <span>Entidad</span>
                          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-max md:w-screen mt-2 origin-top-right">
                          <div class="px-1 pt-1 pb-1 bg-gray-700 bg-opacity-80 rounded-md shadow-lg dark-mode:bg-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-1 gap-2">
                              <a class="bg-green-800 bg-opacity-70 hover:no-underline  text-green-100 w-full p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-800" href="{{route('informacion.historiaWeb')}}">
                                <div class="ml-3">
                                  <p class="font-semibold">Historia</p>
                                </div>
                              </a>
                              <a class="bg-green-800 bg-opacity-70 hover:no-underline  text-green-100 w-full p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-800" href="{{route('informacion.autoridadesWeb')}}">
                                <div class="ml-3">
                                  <p class="font-semibold">Autoridades Municipales</p>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div> 


                <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="{{route('comunicados.indexweb')}}">NOTICIAS</a>
                    <a class="bg-green-700 hover:no-underline bg-opacity-30 text-green-100  p-2 rounded  mr-4 hover:bg-green-100 hover:text-green-700" href="{{route('informacion.contactosWeb')}}">CONTACTOS</a>




                    <a class="bg-green-900 hover:no-underline text-green-200  py-2 px-4 mx-2 rounded  hover:bg-green-800 hover:text-green-100" href="{{ route('login') }}">Ingresar</a>
                    <a class="bg-green-900 hover:no-underline text-green-200  py-2 px-4 mx-2 mr-4 rounded  hover:bg-green-800 hover:text-green-100" href="{{ route('register') }}">Registrar</a>
                </div>
            </nav>
            <div class="content">
                @yield('contenido')
            </div>
        </div>
    </header>

 <div class="bg-gray-700  pt-2 ">
    <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-100 text-sm flex-col bg-opacity-80
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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- ./wrapper -->
    <!--@ yield('scripts')-->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- jQuery -->
   

    <script src="{{asset('js/subirimagen.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
        $(document).on('change', '#FOTO', function(){
            readImage(this);});});


    </script>

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>