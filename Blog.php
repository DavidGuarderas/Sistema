<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link rel="stylesheet" href="css/estiloblog.css">
    
    <?php
    include ("css/componentes.html");
    ?>
    
    <style>
        p{color: rgb(0, 0, 0);}
        a{ color: white; }
    </style>


</head>
<body>

    <div class="social">
        <ul>
          <li><a href="https://www."target="_blank"> <i class="fa fa-facebook"></i> </li> </a></li>
          <li><a href="https://www."target="_blank"> <i class="fa fa-instagram"></i> </a></li>
          <li><a href="https://www."target="_blank"> <i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www."target="_blank"> <i class="fa fa-whatsapp"></i></a></li>
          <li><a href="https://www."target="_blank"> <i class="fa fa-youtube"></i></a></li>
        </ul>		
      </div>

      <!-- header start -->
    <div id="templatemo_home_page">
        <div class="templatemo_topbar">
        <div class="container">
            <div class="row">
            <div class="templatemo_titlewrapper"><img src="images/templatemo_logobg.png" alt="logo background">
                <div class="templatemo_title"><span></span></div>
            </div>
            <div class="clear"></div>
            <div class="templatemo_titlewrappersmall">Inmmokraft</div>
            <nav class="navbar navbar-default templatemo_menu" role="navigation">
                <div class="container-fluid"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="top-menu">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="menu" href="index.php"> <p>Inicio</p> </a></li>
                        <li><a class="menu" href="Propiedades.php"> <p>Propiedades</p> </a></li>
                        <li><a class="menu" href="Blog.php"> <p>Blog</p> </a></li>
                        <li><a class="menu" href="requisitos.php"> <p>Requerimientos</p> </a></li>
                    </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
            </div>
        </div>
        </div>
    </div><br><br><br><br>
  <!-- header end -->
  <?php
    include "conexion.php";

    $query = "SELECT * FROM blog";
    $resultado = $conn->query($query);

    while ($row = $resultado->fetch_assoc()) {
  ?>

    <div id="main-content" class="container-fluid">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 ">

                <div class="card single_post">
                    <div class="body">

                    <div><h3><?php echo $row['titulo']; ?></h3></div>
                    <div><textarea class="form-control" readonly="readonly"><?php echo $row['Mensaje']; ?></textarea></div>
                    </div>
                </div>                                       
            </div>
        </div>
    </div>
    </div>

    <?php
    }
    ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>