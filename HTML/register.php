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
    <link href="..\CSS\estiloregister.css" type="text/css" rel="stylesheet" />

    <title>SofingTV</title>
  </head>
  <body>
  <?php 
  $mi_pagina = 'register';
  include ("../PHP/header.php");    
  ?>

    <div class="container signup-form" style="padding-top: 150px;">
      <form action="/examples/actions/confirmation.php" method="post">
      <h2>Registro</h2>
      <p class="hint-text">¡Crea tu cuenta y empieza a disfrutar!.</p>
          <div class="form-group">
        <div class="row">
          <div class="col"><input type="text" class="form-control" name="first_name" placeholder="Nombre" required="required"></div>
          <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Apellidos" required="required"></div>
        </div>        	
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
          </div>
      <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
          </div>
      <div class="form-group">
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirma contraseña" required="required">
          </div>        
          <div class="form-group">
        <label class="form-check-label"><input type="checkbox" required="required"> Acepto los <a href="#">Términos y condiciones de uso</a></label>
      </div>
      <div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
          </div>
      </form>
    <div class="text-center">¿Ya tienes una cuenta? <a href="login.php">¡Entra!</a></div>
  </div>
        


  <?php include ("../PHP/footer.php"); ?>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="..\Javascript\5454"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>