<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>xp</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Almacenes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--BOTONO PAGINA DE INICIO-->
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
          </li>


          <!--BOTON PAGINA ALMACEN-->
          <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo _HOME;?>/almacenes">Almacenes</a>
          </li>


          <!--BOTON PAGINA CATEGORIA-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Por Tipo</a>
              <a class="dropdown-item" href="<?php echo _HOME;?>/category">Listar</a>
              <a class="dropdown-item" href="#">Descripciones</a>
            </div>
          </li>


          <!--BOTON PAGINA PRODUCTOS-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Listar</a>
              <a class="dropdown-item" href="#">Agregar</a>
              <a class="dropdown-item" href="#">Editar</a>
            </div>
          </li>

          <!--BOTON PAGINA empleados-->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empleados</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index/assistance">Asistencia</a>
            </div>
          </li>

          <!--BOTON PAGINA REGISTRO-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo _HOME;?>/register">Ingresar a Registro</a>
            </div>
          </li>
        </ul>

        <!--CUADRO DE BUSQUEDA-->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Busqueda" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
        </form>
      </div>
    </nav>

    <form class="form-signin" method="POST" action="register/add">
      <img class="mb-4" src="../../../public/img/logo.png" alt="" width="300" height="180">
      <h1 class="h3 mb-3 font-weight-normal">REGISTRO</h1>


      <!--NOMBRE USUARIO-->
      <label for="name" class="sr-only">Name</label>
      <input type="text" id="name" name="name" class="form-control" placeholder="NAME" required="" autofocus="">

      <!--CARNET DE INDENTIDAD-->
      <label for="ci" class="sr-only">CI</label>
      <input type="text" id="ci" name="ci" class="form-control" placeholder="CI" required="" autofocus="">

      <!--DIA INGRESO-->
      <label for="day" class="sr-only">Day</label>
      <input type="text" id="day" name="day" class="form-control" placeholder="DAY" required="" autofocus="">

      <!--HORA DE INGRESO-->
      <label for="hour" class="sr-only">Hr</label>
      <input type="text" id="hour" name="hour" class="form-control" placeholder="Hr" required="" autofocus="">

      <!--BOTON DE REGISTRO-->
      <button onclick="pulsar()" class="btn btn-primary" type="submit" name="registrar" >Registrar</button>

      <p class="mt-5 mb-3 text-muted">©2018</p>
    </form>
    <script>
    function pulsar() {
        Alert("USUARIO CREADO");
      }
    </script>
    <!--
    <div class="alert alert-success">
      <strong>Success!</strong> usuario creado.
    </div>
    -->
    <span id="buffer-extension-hover-button" style="display: none; position: absolute; z-index: 8675309; width: 100px; height: 25px; background-image: url(&quot;chrome-extension://noojglkidnpfjbincgijbaiedldjfbhh/data/shared/img/buffer-hover-icon@1x.png&quot;); background-size: 100px 25px; opacity: 0.9; cursor: pointer;"></span>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
