<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Mi tienda</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  </head>
  <body>

  <nav class="nav bg-light">
  <a class="nav-link" href="?controlador=usuario&accion=inicio">Inicio</a>
      <a class="nav-link active" href="?controlador=tienda&accion=productos">Productos</a>
    <?php if ($_SESSION['nombre'] == NULL) { ?>
      <a class="nav-link" href="?controlador=usuario&accion=login">Login</a>
      <a class="nav-link" href="?controlador=usuario&accion=registro">Registrarse</a>
    <?php } else if(($_SESSION['nombre'] != NULL)) { ?>
      <?php if($_SESSION['rol'] == 'empleado') { ?>
        <a class="nav-link active" href="?controlador=empleados&accion=productos">Gestionar productos</a>
      <?php } else if($_SESSION['rol'] == 'admin') { ?>
        <a class="nav-link active" href="?controlador=empleados&accion=productos">Gestionar productos</a>
        <a class="nav-link active" href="?controlador=admin&accion=usuarios">Gestionar usuarios</a>
      <?php } else { ?>
        <a class="nav-link" href="?controlador=tienda&accion=carrito">Carrito</a>
      <?php } ?>
      <a class="nav-link" href="?controlador=usuario&accion=logout">Logout</a>
    <?php } ?>
    </nav>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>