<?php require("con_sql.php"); ?>
<?php require("isAdmin.php"); ?>
<?php require("cargaAutos.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>tp</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    

<link href="./css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Sobre nosotros...</h4>
          <p class="text-muted">Nos dedicamos a facilitar el acceso al alquiler de un vehículo</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <ul class="list-unstyled">
            <li><a href="./loginpage.php" id="login" class="text-white">Iniciar sesión</a></li>
            <li><a href="./registerpage.php" id="create" class="text-white">Registrarse</a></li>
            <li><a href="./autoalquilado.php?us=<?php echo $_COOKIE["username"];?>" id="autoalquilado" class="text-white">Mi auto alquilado</a></li>
            <li><a href="./logout.php" id="logout" class="text-white">Cerrar sesión</a></li>
            <li><a href="./agregarautopage.php" id="addAuto" class="text-white">Agregar un auto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Alquiler de autos</strong>
      </a>
      <span class="username" style="color: white; padding-left: 50rem;">
        <?php
          if($_COOKIE){
            $user = $_COOKIE["username"];
            echo $user;
          } 
        ?>
      </span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Selecciona tu vehículo</h1>
        <p class="lead text-muted">Alquilar tu próximo vehículo ahora es más fácil. Crea una cuenta, selecciona tu vehículo y retiralo cuando quieras</p>
        <p>
          <!--<a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
        </p>
      </div>
    </div>
  </section>


  
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php
        popularAutos($conex);
        ?>

      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Volver arriba.</a>
    </p>
    <!--<p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>-->
  </div>
</footer>


    <script src="./js/bootstrap.js"></script>
    <script src="./public/isLogged.js"></script>
    <script src="./public/checkLogin.js"></script>
    <?php
    isAdmin($user);
    ?>
      
  </body>
</html>
