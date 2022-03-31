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
    <title>Crear Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    </head>
<body>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Consejo
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    En este espacio podras crear un mensaje para que lo visualicen los usuarios en la parte de Blog.
  </div>
</div>
<br>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">		
                <form method="POST" action="crear.php" >
                    <h4 class="text-center">Cargar Mensaje en el Blog</h4>
                    <div class="form-group">

                        <label class="col-sm-12 ">Correo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="correo" required>
                        </div>

                        <label class="col-sm-12 ">Nombre de Usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="usuario" required>
                        </div>

                        <label class="col-sm-12 ">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="contraseña" required>
                        </div>
                        
                        <br>
                        <input class="btn btn-primary" type="submit" value="Crear Usuario">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>