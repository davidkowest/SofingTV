<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Disfruta del cine desde el sofá"/>
<meta name="author" content="Davidkowest">
<link rel="shortcut icon" href="..\Imagenes\Logo\logo_transparent.png" type="image/png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="..\SofingTV\CSS\estiloindex.css" type="text/css" rel="stylesheet" />

    <title>SofingTV</title>
  </head>
  <body>

  <?php 
  $mi_pagina = 'index';
  include ("PHP/header.php");    
  ?>


      <div id="carouselExampleIndicators" class="container-xl carousel slide" data-ride="carousel" style="padding-top: 65px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="..\SofingTV\Imagenes\hollywood.jpg" alt="First slide">
        </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="..\SofingTV\Imagenes\greenbookletras.jpg" alt="Second slide">
        </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="..\SofingTV\Imagenes\origen.jpg" alt="Third slide">
        </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="..\SofingTV\Imagenes\parasitos.jpg" alt="Fourth slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<!--Primer carousel-->
      <div class="container text-left my-3">
        <h2 class="font-weight-light" style="color: white; font: bold;">ESTRENOS</h2>
        <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
            <div id="myCarousel" class="carousel slide w-100"data-interval="false" data-ride="carousel" data-pause="hover">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\tesla.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\mulan.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\madreoscura.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\scooby.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\lacaza.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                             <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\honores.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\familia.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\corazonesrotos.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!--Segundo carousel-->
    <div class="container text-left my-3">
      <h2 class="font-weight-light" style="color: white; font: bold;">PELÍCULAS MAS VISTAS</h2>
      <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
          <div id="myCarousel2" class="carousel slide w-100"data-interval="false">
              <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\tesla.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\mulan.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\madreoscura.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\scooby.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\lacaza.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                         <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\honores.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\familia.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\corazonesrotos.jpeg">
                        </a>
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next bg-dark w-auto" href="#myCarousel2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
  </div>
<!--Tercer carousel-->
  <div class="container text-left my-3">
    <h2 class="font-weight-light" style="color: white; font: bold;">PREMIADAS</h2>
    <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
        <div id="myCarousel3" class="carousel slide w-100"data-interval="false">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\tesla.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\mulan.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\madreoscura.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\scooby.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\lacaza.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                             <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\honores.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\familia.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\corazonesrotos.jpeg">
                            </a>
                        </div>
                    </div>
            </div>
            <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bg-dark w-auto" href="#myCarousel3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!--Cuarto carousel-->
<div class="container text-left my-3">
  <h2 class="font-weight-light" style="color: white; font: bold;">PARA LOS MAS PEQUES</h2>
  <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
      <div id="myCarousel4" class="carousel slide w-100"data-interval="false">
          <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item active">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\tesla.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                    <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\mulan.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                    <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\madreoscura.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\scooby.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\lacaza.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                     <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\honores.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\familia.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="..\SofingTV\HTML\ficha.php">
                        <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\corazonesrotos.jpeg">
                    </a>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel4" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next bg-dark w-auto" href="#myCarousel4" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
</div>
<!--Quinto carousel-->
<div class="container text-left my-3">
    <h2 class="font-weight-light" style="color: white; font: bold;">CLÁSICOS IMPRESCINDIBLES</h2>
    <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
        <div id="myCarousel5" class="carousel slide w-100"data-interval="false">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\tesla.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\mulan.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                            <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\madreoscura.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\scooby.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\lacaza.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                             <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\honores.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\familia.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-2">
                            <a href="..\SofingTV\HTML\ficha.php">
                                <img class="img-fluid" src="..\SofingTV\Imagenes\cartelas\corazonesrotos.jpeg">
                            </a>
                        </div>
                    </div>
            </div>
            <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel5" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bg-dark w-auto" href="#myCarousel5" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  </div>
<!--Sexto carousel-->
<div class="container text-left my-3">
    <h2 class="font-weight-light" style="color: white; font: bold;">CATEGORÍAS</h2>
    <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
        <div id="myCarousel6" class="carousel slide w-100"data-interval="false">
            <div class="carousel-inner w-100 pt-3" role="listbox">
                <div class="carousel-item active">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto"  src="..\SofingTV\Imagenes\categorias\accionbuena.png">
                            <figcaption class="text-center" style="color: white">ACCIÓN</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\aventurasbuena.png">
                            <figcaption class="text-center" style="color: white">AVENTURAS</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\comediabuena.png">
                            <figcaption class="text-center" style="color: white">COMEDIA</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\dramabuena.png">
                            <figcaption class="text-center" style="color: white">DRAMA</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\terrorbuena.png">
                            <figcaption class="text-center" style="color: white">TERROR</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\musicalbuena.png">
                            <figcaption class="text-center" style="color: white">MUSICAL</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\cienciaficcionbuena.png">
                            <figcaption class="text-center" style="color: white">C.FICCIÓN</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\belicabuena.png">
                        <figcaption class="text-center" style="color: white">BÉLICA</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\westernbuena.png">
                        <figcaption class="text-center" style="color: white">WESTERN</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto"  src="..\SofingTV\Imagenes\categorias\suspensebuena.png">
                        <figcaption class="text-center" style="color: white">SUSPENSE</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\infantilesbuena.png">
                        <figcaption class="text-center" style="color: white">INFANTILES</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\SofingTV\Imagenes\categorias\documentalesbuena.png">
                        <figcaption class="text-center" style="color: white">DOCUMENTALES</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel6" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bg-dark w-auto" href="#myCarousel6" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
  </div>  
    
  <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm align-items-center" style="color: white; text-align: center; background-color: rgba(17, 17, 17, 0.322) ; ;">
                    <h1>SOFING TV - DISFRUTA DEL CINE DESDE EL SOFÁ</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm align-items-center" style="color: white; text-align: center; background-color: rgba(17, 17, 17, 0.322) ; ;">
                    
                </div>
                <div class="col-sm align-items-center" style="color: white; text-align: center; background-color: rgba(17, 17, 17, 0.322) ; ;">
                    <p>
                        Sofing TV proporciona una serie de servicios que ofrecen todo un universo 
                        de contenidos en solo unos clics. Disfruta de una verdadera experiencia cinematográfica 
                        con los últimos estrenos.
                    </p>
                </div>
                <div class="col-sm align-items-center" style="color: white; text-align: center; background-color: rgba(17, 17, 17, 0.322) ;">
                    <div class="row">

                        <div class="col-sm">
                            <a href="https://www.instagram.com/sofingtv/?hl=es">
                                <img class="mt-3" style="height: 70px; width: 70px;" src="..\SofingTV\Imagenes\instagram.png" alt=""></a>
                        </div>
                        <div class="col-sm">
                            <a href="https://twitter.com/sofingtv">
                                <img class="mt-3" style="height: 70px; width: 70px;" src="..\SofingTV\Imagenes\twitter.png" alt=""></a>
                        </div>
                        <div class="col-sm">
                            <a href="https://www.facebook.com/sofingtv/">
                            <img class="mt-3" style="height: 70px; width: 70px;" src="..\SofingTV\Imagenes\facebook.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm align-items-center" style="color: white; text-align: center; background-color: rgba(17, 17, 17, 0.322) ; ;">
                    <h4>SOFING TV</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <link rel="alternate" type="application/rss+xml" href="..\SofingTV\RSS\feedTiempo.rss" />
                </div>
                <div class="col">
                    <link rel="alternate" type="application/atom+xml" href="C:\Users\Davidkowest\Documents\DAM\L.MARCAS 2020\RSS\feedTiempo.atom" />
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="footer-copyright text-center py-3" style="color: white;">© 2020 Copyright:
                <a href="Index.php">SofingTV.es</a>
            </div>
        </div>
    </footer>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="..\SofingTV\Javascript\estilo.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>