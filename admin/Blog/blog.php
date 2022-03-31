<?php

    include ("../../css/componentes.html");

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
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Style Sheets -->
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/templatemo_misc.css">
    <link rel="stylesheet" href="../../css/templatemo_style.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- JavaScripts -->
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap-dropdown.js"></script>
    <script src="../../js/bootstrap-collapse.js"></script>
    <script src="../../js/bootstrap-tab.js"></script>
    <script src="../../js/jquery.singlePageNav.js"></script>
    <script src="../../js/jquery.flexslider.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/jquery.lightbox.js"></script>
    <script src="../../js/templatemo_custom.js"></script>
    <script src="../../js/responsiveCarousel.min.js"></script>  


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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

                        <label class="col-sm-12 ">Titulo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="titulo" required>
                        </div>

                        <label class="col-sm-12 ">Mensaje</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mensaje" required>
                        </div>
                        
                        <br>
                        <input class="btn btn-primary" type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>