@extends('layouts.sidebar')
@section('contenido')        
<div class="body mt-20 py-64 mx-8">
    <div class="md:flex items-center">
        <div class="w-full  mr-auto text-center" style="text-shadow: 0 20px 50px hsla(0,0%,0%,8);">
            <h1 class="text-4xl font-bold text-white tracking-wide">¡Bienvenido a nuestra pagina!</h1>
            <h2 class=" text-6xl font-bold text-white tracking-wide">G.A.M.<span class="text-6xl text-gray-800"> de Soracachi</span></h2>
            <p class="text-gray-300">
                Trabajando por la unidad de nuestras comunidades.
            </p>
        </div>
    </div>
</div>
<!-- component -->
<style>
    .w-70 {
      width: 20rem;
      }
  </style>
  
  <section class="blog text-gray-700 bg-green-600 bg-opacity-20  body-font">
        <div class="container px-5  mx-auto">
          <div class="flex flex-wrap w-full  flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl -mt-36 font-medium title-font  text-gray-900"> INSTITUCIONALIDAD</h1>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-36">
            <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                <div class="bg-yellow-200 bg-opacity-0 h-56 w-full rounded-lg shadow-md bg-center">
                    <img class="w-40 h-40 mx-20 my-4" src="{{asset('../extras/page_image/mision.png')}}" alt="Sunset in the mountains">
                </div>
  
                <div class=" w-70 bg-green-700 bg-opacity-80 -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                    
                    <div class="title-post text-xl text-center font-medium">MISIÓN</div>
    
                    <div class="mt-6 summary-post text-base text-green-100 text-justify">La misión del gobierno autonomo municipal de soracachi desarrollar acciones, crea oportunidades, une esfuerzos e impulsa la cordinación interinstitucional con el objetivo de promover el desarrollo  económico-productivo, del desarrollo humano, la conservación de los recursos naturales, del medio ambiente y la buena administración municipal. 
                    </div>
               
                </div>
            </div>
            <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                <div class="bg-yellow-200 bg-opacity-0 h-56 w-full rounded-lg shadow-md bg-center">
                    <img class="w-40 h-40 mx-20 my-4" src="{{asset('../extras/page_image/vision.png')}}" alt="Sunset in the mountains">
                </div>
  
                <div class=" w-70 bg-green-700 bg-opacity-80 -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                    
                    <div class="title-post text-xl text-center font-medium">VISIÓN</div>
    
                    <div class="mt-6 summary-post text-base text-green-100 text-justify">La visión del Gobierno Autónomo Municipal  De Soracachi, es un municipio generador de un sistema productivo diversificado, ecológico y sostenible; con infraestructura productiva consolidada e integrada; con recursos humanos sanos y competitivos que aseguran sus ingresos, seguridad alimentaria y desarrollo de potencialidades rústicas y artesanales, preservando el medio ambiente y promoviendo la gobernabilidad
                    </div>
               
                </div>
            </div>
            <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                <div class="bg-yellow-200 bg-opacity-0 h-56 w-full rounded-lg shadow-md bg-center">
                    <img class="w-40 h-40 mx-20 my-4" src="{{asset('../extras/page_image/objetivo.png')}}" alt="Sunset in the mountains">
                </div>
  
                <div class=" w-70 bg-green-700 bg-opacity-80 -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                    
                    <div class="title-post text-xl text-center font-medium">OBJETIVO</div>
    
                    <div class="mt-6 summary-post text-base text-green-100 text-justify">Objetivo es Promover el fortalecimiento del sistema productivo del municipio, impulsando el desarrollo de actividades productivas, incrementando sus niveles de producción y productividad y el fortalecimiento de las cadenas productivas, para mejorar los ingresos de las familias
                    </div>
               
                </div>
            </div>

           
          </div>
        </div>
      </section>



      <section class="blog text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-2 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> NOTICIAS DESTACADAS</h1>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

            <div class="mx-auto  max-w-xs ">
                <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide " >
                    <div class="md:flex-shrink-0">
                        <img src="{{asset('extras/page_image/portfolio/OSCAR.jpeg')}}" alt="mountains" class="w-full h-48 rounded-lg rounded-b-none">
                    </div>
                    <div class="px-4 py-2 mt-2">
                        <h2 class="font-bold text-2xl text-gray-800 tracking-normal">ALCALDE</h2>
                            <p class="text-sm text-gray-700 px-2 mr-1">
                                H. OSCAR FLOREZ ADRIAN
                            </p>
                            <div class="flex items-center justify-between mt-2 mx-6">
                                <a href="#" class="text-blue-500 text-xs -ml-3 ">Ver mas...</a>
                                <a href="#" class="flex text-gray-700">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                    5
                                </a>
                            </div>
                        <div class="author flex items-center -ml-3 my-3">
                            <div class="user-logo">
                                <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                            </div>
                            <h2 class="text-sm tracking-tighter text-gray-900">
                                <a href="#">Por Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto  max-w-xs ">
                <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide " >
                    <div class="md:flex-shrink-0">
                        <img src="{{asset('extras/page_image/portfolio/1.jpeg')}}" alt="mountains" class="w-full h-48 rounded-lg rounded-b-none">
                    </div>
                    <div class="px-4 py-2 mt-2">
                        <h2 class="font-bold text-2xl text-gray-800 tracking-normal">HONORABLE CONCEJO</h2>
                            <p class="text-sm text-gray-700 px-2 mr-1">
                               MUNICIPIO DE SORACACHI
                            </p>
                            <div class="flex items-center justify-between mt-2 mx-6">
                                <a href="#" class="text-blue-500 text-xs -ml-3 ">Ver mas...</a>
                                <a href="#" class="flex text-gray-700">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                    5
                                </a>
                            </div>
                        <div class="author flex items-center -ml-3 my-3">
                            <div class="user-logo">
                                <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                            </div>
                            <h2 class="text-sm tracking-tighter text-gray-900">
                                <a href="#">Por Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto  max-w-xs ">
                <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide " >
                    <div class="md:flex-shrink-0">
                        <img src="https://ik.imagekit.io/q5edmtudmz/post1_fOFO9VDzENE.jpg" alt="mountains" class="w-full h-48 rounded-lg rounded-b-none">
                    </div>
                    <div class="px-4 py-2 mt-2">
                        <h2 class="font-bold text-2xl text-gray-800 tracking-normal"></h2>
                            <p class="text-sm text-gray-700 px-2 mr-1">
                               
                            </p>
                            <div class="flex items-center justify-between mt-2 mx-6">
                                <a href="#" class="text-blue-500 text-xs -ml-3 ">Ver mas...</a>
                                <a href="#" class="flex text-gray-700">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                    5
                                </a>
                            </div>
                        <div class="author flex items-center -ml-3 my-3">
                            <div class="user-logo">
                                <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                            </div>
                            <h2 class="text-sm tracking-tighter text-gray-900">
                                <a href="#">Por Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto  max-w-xs ">
                <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide " >
                    <div class="md:flex-shrink-0">
                        <img src="https://ik.imagekit.io/q5edmtudmz/post1_fOFO9VDzENE.jpg" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none">
                    </div>
                    <div class="px-4 py-2 mt-2">
                        <h2 class="font-bold text-2xl text-gray-800 tracking-normal"></h2>
                            <p class="text-sm text-gray-700 px-2 mr-1">
                               
                            </p>
                            <div class="flex items-center justify-between mt-2 mx-6">
                                <a href="#" class="text-blue-500 text-xs -ml-3 ">Ver mas...</a>
                                <a href="#" class="flex text-gray-700">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                    5
                                </a>
                            </div>
                        <div class="author flex items-center -ml-3 my-3">
                            <div class="user-logo">
                                <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                            </div>
                            <h2 class="text-sm tracking-tighter text-gray-900">
                                <a href="#">Por Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
      </section>




<!-- component -->






        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GALERIA DE PRODUCTOS Y GANADERIA QUE PRODUCE EL GAM SORACACHI</h2>

                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="extras/page_image/portfolio/1.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">HONORABLE CONCEJO</div>
                                <div class="portfolio-caption-subheading text-muted">SORACACHI</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="extras/page_image/portfolio/2.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ANIVERSARIO DE SORACACHI</div>
                                <div class="portfolio-caption-subheading text-muted">4 DE FECBRERO 2002</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="extras/page_image/portfolio/4.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">DESFILE</div>
                                <div class="portfolio-caption-subheading text-muted">ANIVERSARIO</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="extras/page_image/portfolio/5.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">BANDA</div>
                                <div class="portfolio-caption-subheading text-muted">DESFILE </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="extras/page_image/portfolio/6.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">DESFILE</div>
                                <div class="portfolio-caption-subheading text-muted">SORACACHI</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection