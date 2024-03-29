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
    <link href="..\CSS\estiloficha.css" type="text/css" rel="stylesheet" />

    <title>SofingTV</title>
  </head>
  <body>

  <?php 
  $mi_pagina = 'ficha';
  include ("../PHP/header.php");    
  ?>

    <!-- <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 1) ;">
          <a class="navbar-brand" href="..\index.php">
            <img style="width: 60px; height: 40px;" src="..\Imagenes\Logo\logoblanco.png" alt="logo sofing tv">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="peliculas.php">Películas<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="series.php">Series</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <form class="form-inline">
                <a href="login.php">
                    <button class="btn btn-sm btn-outline-secondary p-2" style="border-color: white; color: white;" type="button">Entrar</button>
                  </a>
                  <a href="register.php">
                    <button class="btn btn-outline-success ml-2" type="button">Registrar</button>
                  </a>
            </form>
          </div>
        </nav>
    </header> -->
    <div class="row">
      <div class="col text-center container" style="padding-top: 60px;">
        <img class="img-fluid" src="..\Imagenes\bannermulan.jpeg" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col text-center" style="padding-top: 25px ;">
        <button type="button" class=" btn-change mr-5" >Alquilar: 2.99€</button>
        <button type="button" class=" btn-change">Comprar: 8.90€</button>
      </div>
    </div>
    <div class="row container"> 
      <div class="d-none d-lg-block col-md text-center bd-sidebar" style="padding-top: 25px;">
        <div class="card container-fluid" style="width: 18rem;">
          <img class="img-fluid" src="..\Imagenes\peliculas\mulan.png">
          <div class="card-body">
            <h5 class="card-title">Mulán</h5>
            <p class="card-text">Aventura/Acción/Remake</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Año 2020</li>
            <li class="list-group-item">Alquiler: 2.99€</li>
            <li class="list-group-item">Compra digital: 8.90€</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Compra digital</a>
            <a href="#" class="card-link">Aquilar</a>
          </div>
        </div>
      </div>
      <div class="col-sm text-center container" style="color: rgba(253, 253, 253, 0.795); padding-top: 75px;">
        <div class="row">
          <div class="col text-center">
            <h3>Mulán</h3>
          </div>
        </div>
        
        <div class="row text-center">
          <dl class="list-group-horizontal text-center">
            <dt>Título original</dt>
            <dd>Mulan</dd>
            <dt>Año</dt>
            <dd>2020</dd>
            <dt>Duración</dt>
            <dd>115 min.</dd>
            <dt>País</dt>
            <dd>Estados Unidos</dd>
            <dt>Dirección</dt>
            <dd>Niki Caro</dd>
            <dt>Guión</dt>
            <dd>Rick Jaffa, Amanda Silver , Lauren Hynek, Elizabeth Martin</dd>
            <dt>Música</dt>
            <dd>Harry Gregson-Williams</dd>
            <dt>Fotografía</dt>
            <dd>Mandy Walker</dd>
            <dt>Reparto</dt>
            <dd>Liu Yifei, Donnie Yen, Gong Li, Jet Li, Jason Scott Lee, 
              Rosalind Chao, Utkarsh Ambudkar, Yoson An, Doua Moua, Jimmy Wong, Ron Yuan, 
              Tzi Ma, Chen Tang, Roger Yuan, Cheng Pei-Pei, Xana Tang, Nelson Lee, Jen Sung, 
              Arka Das, Jenson Cheng, Chum Ehelepola, King Lau, Kenneth De Abrew, R.J. O'Young, 
              Owen Kwong</dd>
            <dt>Productora</dt>
            <dd>Walt Disney Pictures, Jason T. Reed Productions, Good Fear Content. Distribuida por Walt Disney Pictures</dd>
            <dt>Género</dt>
            <dd>Aventuras. Acción. Bélico. Drama | Wuxia. Cine épico. Cine familiar. Remake</dd>
            <dt>Sinopsis</dt>
            <dd>Narra la historia de Mulán, una intrépida joven lo arriesga todo por amor a su familia y a su país
               hasta convertirse en una de las mayores guerreras de la historia de China. Cuando el emperador de China
                decreta que un hombre de cada familia debe servir en el Ejército Imperial para defender al país de los 
                invasores del norte, Hua Mulán, la hija mayor de un condecorado guerrero, decide ocupar el lugar de su padre 
                enfermo. Haciéndose pasar por un hombre, Hua Jun, se enfrenta a constantes desafíos y deberá aprender a canalizar 
                su fuerza interior y a aceptar su verdadero potencial. Un viaje épico que la convertirá en una reconocida guerrera 
                y le permitirá ganarse el respeto de una nación agradecida... y de un padre orgulloso. Remake del clásico de Disney.</dd>
          </dl>
        </div>
        <div class="row">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3No2ro4xfo4" allowfullscreen></iframe>
        </div>
      </div>

      </div>
      <div class="d-none col align-items-center">

      </div>
    </div>

    <div class="row">
      <div class="container text-left my-3">
      <h2 class="font-weight-light" style="color: white; font: bold;">QUIZÁS TE PUEDA INTERESAR</h2>
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