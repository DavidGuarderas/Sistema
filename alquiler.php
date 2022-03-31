<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">

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
    </div>
  <!-- header end -->

  <!-- work start -->
<div class="templatemo_workwrapper" id="templatemo_work_page">
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php

    include "conexion.php";

    $query  = "SELECT * FROM alquiler WHERE aUbicacion='Norte'";
    $resultado = $conn->query($query);
    
    echo "<h2>Norte</h2>";

    while ($row = $resultado->fetch_assoc()) {
    ?>
    <div>
      <div class="templatemo_workbox">
        <div class="gallery-item"><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" >
          <div class="overlay">
            <div class="templatemo_worktitle"><?php echo $row['aUbicacion']; ?></div>
            <div class="templatemo_workdes"><?php echo $row['aMCuadrados']; echo " m2"; ?></div>
            <div class="templatemo_worklink"><a href="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" data-rel="lightbox" class="fa fa-search-plus"></a></div>
            <div class="templatemo_worklink"><a href="venta-menu.php?id=<?php echo $row['idAlquiler'];?>" class="fa fa-eye"></a></div>
          </div>
        </div>
      </div>
    </div>

    <?php
    }
    ?>    

  <div class="clear"></div>

  <?php

  include "conexion.php";

  $query2  = "SELECT * FROM alquiler WHERE aUbicacion='Centro'";
  $resultado2 = $conn->query($query2);

  echo "<h2>Centro</h2>";

  while ($row = $resultado2->fetch_assoc()) {
  ?>
  <div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" >
        <div class="overlay">
          <div class="templatemo_worktitle"><?php echo $row['aUbicacion']; ?></div>
          <div class="templatemo_workdes"><?php echo $row['aMCuadrados']; echo " m2"; ?></div>
          <div class="templatemo_worklink"><a href="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="venta-menu.php?id=<?php echo $row['idAlquiler'];?>" class="fa fa-eye"></a></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  }
  ?>   
  
  <div class="clear"></div>

  <?php

  include "conexion.php";

  $query3  = "SELECT * FROM alquiler WHERE aUbicacion='Sur'";
  $resultado3 = $conn->query($query3);

  echo "<h2>Sur</h2>";

  while ($row = $resultado3->fetch_assoc()) {
  ?>
  <div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" >
        <div class="overlay">
          <div class="templatemo_worktitle"><?php echo $row['aUbicacion']; ?></div>
          <div class="templatemo_workdes"><?php echo $row['aMCuadrados']; echo " m2"; ?></div>
          <div class="templatemo_worklink"><a href="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="venta-menu.php?id=<?php echo $row['idAlquiler'];?>" class="fa fa-eye"></a></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  }
  ?>   
  
  <div class="clear"></div>

  <?php

  include "conexion.php";

  $query4  = "SELECT * FROM alquiler WHERE aUbicacion='Calderón'";
  $resultado4 = $conn->query($query4);

  echo "<h2>Calderón</h2>";

  while ($row = $resultado4->fetch_assoc()) {
  ?>
  <div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" >
        <div class="overlay">
          <div class="templatemo_worktitle"><?php echo $row['aUbicacion']; ?></div>
          <div class="templatemo_workdes"><?php echo $row['aMCuadrados']; echo " m2"; ?></div>
          <div class="templatemo_worklink"><a href="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="venta-menu.php?id=<?php echo $row['idAlquiler'];?>" class="fa fa-eye"></a></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  }
  ?>   
  
  <div class="clear"></div>

  <?php

  include "conexion.php";

  $query5  = "SELECT * FROM alquiler WHERE aUbicacion='Los Valles'";
  $resultado5 = $conn->query($query5);

  echo "<h2>Los Valles</h2>";

  while ($row = $resultado5->fetch_assoc()) {
  ?>
  <div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img height="200px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" >
        <div class="overlay">
          <div class="templatemo_worktitle"><?php echo $row['aUbicacion']; ?></div>
          <div class="templatemo_workdes"><?php echo $row['aMCuadrados']; echo " m2"; ?></div>
          <div class="templatemo_worklink"><a href="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="venta-menu.php?id=<?php echo $row['idAlquiler'];?>" class="fa fa-eye"></a></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  }
  ?>   
  
  <div class="clear"></div>
    
  </div>
  <!--work end-->
  <div class="clear"></div>
</body>
</html>