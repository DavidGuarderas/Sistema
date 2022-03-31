<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta || Menu</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades || Venta</title>
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
            <div class="row align-items-start">
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
  

  <?php
  include "conexion.php";
  $id=$_REQUEST['id'];
  $query = "SELECT * FROM alquiler WHERE idAlquiler='$id'";
  $resultado = $conn->query($query);
  while ($row = $resultado->fetch_assoc()) {
  ?>

   <!-- contact start -->

  <div class="templatemo_contactwrapper" > 
      <div class="container templatemo_contactmargin">
        <div class="row"> 
          <div class="col-md-8">
            <div class="templatemo_address_title">Fotografia:</div>
            <img height="400px" width="600px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>"  >
            <div class="clear"></div> <br>

            <div class="templatemo_address_title">Ubicación:</div><?php echo $row['aUbicacion'];?> 
            <div class="clear"></div>

            <div class="templatemo_address_left">Dormitorios:</div>
            <div class="templatemo_address_right"> <?php echo $row['aCuartos'];?> <i class="fa fa-bed" style="font-size:24px"></i> </div> 
            <div class="clear"> </div>

            <div class="templatemo_address_left">Baños:</div>
            <div class="templatemo_address_right"><?php echo $row['aBaños'];?> <i class="fa fa-bath" style="font-size:24px"></i> </div>
            <div class="clear"> </div>

            <div class="templatemo_address_left">Garages:</div> 
            <div class="templatemo_address_right"><?php echo $row['aGarages'];?> <i class="fa fa-car" style="font-size:24px"></i> </div>
            <div class="clear">  </div>

            <div class="templatemo_address_left">Pisos:</div>
            <div class="templatemo_address_right"><?php echo $row['aPisos'];?> <i class="fa fa-puzzle-piece" style="font-size:24px"></i> </div>
            <div class="clear"></div>

            <div class="templatemo_address_left">Habitantes:</div>
            <div class="templatemo_address_right"><?php echo $row['aHabitantes'];?> <i class="fa fa-users" style="font-size:24px"></i> </div>
            <div class="clear"></div>

            <div class="templatemo_address_left">Mascotas:</div>
            <div class="templatemo_address_right"><?php echo $row['aMascota'];?> <i class="fa fa-paw" style="font-size:24px"></i> </div>
            <div class="clear"></div>

            <div class="templatemo_address_left">Metros Cuadrados:</div>
            <div class="templatemo_address_right"><?php echo $row['aMCuadrados'];?> m² <i class="fa fa-cube" style="font-size:24px"></i> </div>
            <div class="clear"></div>

            <div class="templatemo_address_left">Precio:</div>
            <div class="templatemo_address_right"><?php echo $row['aPrecio'];?><i class="fa fa-usd" style="font-size:24px"></i> </div>
            <div class="clear"></div>

            <div class="templatemo_address_left">Tipo de Propiedad:</div>
            <div class="templatemo_address_right"><?php echo $row['aTipoPropiedad'];?> <i class="fa fa-home" style="font-size:24px"></i> </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
  </div>
  
  <!-- contact end --> 
  <?php
  }
  ?>
  </body>
</html>