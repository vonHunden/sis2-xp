<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>xp</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo _HOME;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo _HOME;?>/css/signin.css" rel="stylesheet">
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
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Almacenes</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo _HOME;?>/almacenes">Listar</a>
            <a class="dropdown-item" href="<?php echo _HOME;?>/almacenes/desocupados">Desocupados</a>
          </div>
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
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>


          <!--BOTON PAGINA REGISTRO-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?php echo _HOME;?>/register">Ingresar a Registro</a>
              <a class="dropdown-item" href="<?php echo _HOME;?>/register/asistencia">Asistencia</a>
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

    <main>
        <hr>
        Nombre Almacen: <h2><?php echo $data['almacen']['nombre_almacen']; ?></h2>
        Titular Almacen: <h2><?php echo $data['almacen']['nombre']
                             ." ".
                             $data['almacen']['apellido']
                             ." Con Ci ".
                             $data['almacen']['ci'];?></h2>
        <hr>
        <hr>
        <h4>Horario de atención</h4>
        <hr>
        <?php foreach($data['horario'] as $dia):?>
         <div>
          <p><strong><?php echo $dia['dia']; ?></strong>
            ||
            <span><?php echo $dia['apertura']; ?></span>
            <span><?php echo $dia['cierre']; ?></span>
          </p>
         </div>
        <?php endforeach;?>
    </main>

    <span id="buffer-extension-hover-button" style="display: none; position: absolute; z-index: 8675309; width: 100px; height: 25px; background-image: url(&quot;chrome-extension://noojglkidnpfjbincgijbaiedldjfbhh/data/shared/img/buffer-hover-icon@1x.png&quot;); background-size: 100px 25px; opacity: 0.9; cursor: pointer;"></span>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo _HOME;?>/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo _HOME;?>/js/popper.min.js"></script>
    <script src="<?php echo _HOME;?>/js/bootstrap.min.js"></script>
  </body>
</html>
