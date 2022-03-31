<?php

include ("../../css/componentes2.html");

session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("Location: ../../login.php");
}else{
    echo " <h1>Bienvenido Usuario $usuario</h1> ";
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuario</title>

        
    </head>
    <body>

      <div class="social">
        <ul>
          <li><a href='salir.php'>Cerrar sesion</a></li>
        </ul>		
      </div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Navegación</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="paginaUsuario.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Venta/mostrarPropiedades.php">Propiedades en Venta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Alquiler/mostrarPropiedades.php">Propiedades en Alquiler</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Blog/mostrarBlog.php">Mensajes/Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        
    </body>
</html>