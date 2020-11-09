@extends('layouts.sidebar')
@section('contenido')        

<section class="page-section" id="services">
            <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenido a nuestra pagina!</div>
                <div class="masthead-heading text-uppercase">G.A.M. DE SORACACHI</div>
                
            </div>
            </header>
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PLAN OPERATIVO ANUAL</h2>
                   
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">MISION</h4>
                        <p class="text-muted">La misión del gobierno autonomo municipal de soracachi desarrollar acciones, crea oportunidades, une esfuerzos e impulsa la cordinación interinstitucional con el objetivo de promover el desarrollo  económico-productivo, del desarrollo humano, la conservación de los recursos naturales, del medio ambiente y la buena administración municipal</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">VISION</h4>
                        <p class="text-muted">La visión del Gobierno Autónomo Municipal  De Soracachi, es un municipio generador de un sistema productivo diversificado, ecológico y sostenible; con infraestructura productiva consolidada e integrada; con recursos humanos sanos y competitivos que aseguran sus ingresos, seguridad alimentaria y desarrollo de potencialidades rústicas y artesanales, preservando el medio ambiente y promoviendo la gobernabilidad</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">OBJETIVO</h4>
                        <p class="text-muted">Objetivo es Promover el fortalecimiento del sistema productivo del municipio, impulsando el desarrollo de actividades productivas, incrementando sus niveles de producción y productividad y el fortalecimiento de las cadenas productivas, para mejorar los ingresos de las familias</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">GALERIA DE PRODUCTOS Y GANADERIA QUE PRODUCE EL GAM SORACACHI</h2>

                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="extras/page_image/portfolio/OSCAR.jpeg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ALCALDE</div>
                                <div class="portfolio-caption-subheading text-muted">H. OSCAR FLOREZ ADRIAN</div>
                            </div>
                        </div>
                    </div>
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
                                <div class="portfolio-caption-heading">ANICERSARIO DE SORACACHI</div>
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