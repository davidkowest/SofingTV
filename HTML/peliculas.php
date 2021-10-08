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
    <link href="..\CSS\estiloindex.css" type="text/css" rel="stylesheet" />

    <title>SofingTV</title>
  </head>
  <body>
  
  <?php 
  $mi_pagina = 'peliculas';
  include ("../PHP/header.php");    
  ?>
    
<!--Primer carousel-->
<div class="container text-left my-3">
    <h2 class="font-weight-light" style="color: white; font: bold; padding-top: 65px;">ESTRENOS</h2>
    <div class="row mx-auto my-auto" style="background-color: rgba(17, 17, 17, 0.322) ;">
        <div id="myCarousel" class="carousel slide w-100"data-interval="false" data-ride="carousel" data-pause="hover">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\tesla.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\mulan.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\madreoscura.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\scooby.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\lacaza.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                         <img class="img-fluid" src="..\Imagenes\cartelas\honores.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\familia.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\corazonesrotos.jpeg">
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
                    <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\tesla.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\mulan.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\madreoscura.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\scooby.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\lacaza.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                     <img class="img-fluid" src="..\Imagenes\cartelas\honores.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\familia.jpeg">
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-2">
                    <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\corazonesrotos.jpeg">
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
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\tesla.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\mulan.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\madreoscura.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\scooby.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\lacaza.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                         <img class="img-fluid" src="..\Imagenes\cartelas\honores.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\familia.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\corazonesrotos.jpeg">
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
                <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\tesla.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                <img class="img-fluid" src="..\Imagenes\cartelas\mulan.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                <img class="img-fluid" src="..\Imagenes\cartelas\madreoscura.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\scooby.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\lacaza.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                 <img class="img-fluid" src="..\Imagenes\cartelas\honores.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\familia.jpeg">
                </a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="col-lg-2">
                <a href="ficha.php">
                    <img class="img-fluid" src="..\Imagenes\cartelas\corazonesrotos.jpeg">
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
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\tesla.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\mulan.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                        <img class="img-fluid" src="..\Imagenes\cartelas\madreoscura.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\scooby.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\lacaza.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                         <img class="img-fluid" src="..\Imagenes\cartelas\honores.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\familia.jpeg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <a href="ficha.php">
                            <img class="img-fluid" src="..\Imagenes\cartelas\corazonesrotos.jpeg">
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
                            <img class="img-fluid mx-auto"  src="..\Imagenes\categorias\accionbuena.png">
                            <figcaption class="text-center" style="color: white">ACCIÓN</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\Imagenes\categorias\aventurasbuena.png">
                            <figcaption class="text-center" style="color: white">AVENTURAS</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\Imagenes\categorias\comediabuena.png">
                            <figcaption class="text-center" style="color: white">COMEDIA</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\Imagenes\categorias\dramabuena.png">
                            <figcaption class="text-center" style="color: white">DRAMA</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\Imagenes\categorias\terrorbuena.png">
                            <figcaption class="text-center" style="color: white">TERROR</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\Imagenes\categorias\musicalbuena.png">
                            <figcaption class="text-center" style="color: white">MUSICAL</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                            <img class="img-fluid mx-auto" src="..\Imagenes\categorias\cienciaficcionbuena.png">
                            <figcaption class="text-center" style="color: white">C.FICCIÓN</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\Imagenes\categorias\belicabuena.png">
                        <figcaption class="text-center" style="color: white">BÉLICA</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\Imagenes\categorias\westernbuena.png">
                        <figcaption class="text-center" style="color: white">WESTERN</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto"  src="..\Imagenes\categorias\suspensebuena.png">
                        <figcaption class="text-center" style="color: white">SUSPENSE</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\Imagenes\categorias\infantilesbuena.png">
                        <figcaption class="text-center" style="color: white">INFANTILES</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-lg-2">
                        <figure>
                        <img class="img-fluid mx-auto" src="..\Imagenes\categorias\documentalesbuena.png">
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
  
  <?php include ("../PHP/footer.php"); ?>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="..\Javascript\estilo.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>