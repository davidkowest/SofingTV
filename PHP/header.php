  <header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 1) ;">
  <a class="navbar-brand" <?php if ($mi_pagina=="index") {echo "href='index.php'";}else {echo "href='../index.php'";} ?>>
    <img style="width: 60px; height: 40px;" <?php if ($mi_pagina=="index") {echo "src='Imagenes/Logo/logoblanco.png'";}else {echo "src='../Imagenes/Logo/logoblanco.png'";} ?>   alt="logo sofing tv">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li <?php if ($mi_pagina=="peliculas") {echo "class='nav-item active'";}else {echo "class='nav-item'";} ?>>
        <a class="nav-link" <?php if ($mi_pagina=="indiex") {echo "href='HTML/peliculas.php'";}else {echo "href='peliculas.php'";} ?> >Películas<span class="sr-only">(current)</span></a>
      </li>
      <li <?php if ($mi_pagina=="series") {echo "class='nav-item active'";} else {echo "class='nav-item'";}?>>
        <a class="nav-link" <?php if ($mi_pagina=="index") {echo "href='HTML/series.php'";}else {echo "href='series.php'";} ?>>Series</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <form class="form-inline">
      <a <?php if ($mi_pagina=="index") {echo "href='HTML/login.php'";}else {echo "href='login.php'";} ?>>
        <button class="btn btn-sm btn-outline-secondary p-2" style="border-color: white; color: white;" type="button">Entrar</button>
      </a>
      <a <?php if ($mi_pagina=="index") {echo "href='HTML/register.php'";}else {echo "href='register.php'";} ?>>
        <button class="btn btn-outline-success ml-2" type="button">Registrar</button>
      </a>
    </form>
  </div>
</nav>
</header>

