<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inmmokraft</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1">
  
  <?php
  include ("css/componentes.html");
  ?>

</head>

<body>

<!--Redes Sociales-->

<div class="social">
  <ul>
    <li><a href="https://www."target="_blank"> <i class="fa fa-facebook"></i> </li> </a></li> 
    <li><a href="https://www."target="_blank"> <i class="fa fa-instagram"></i> </a></li>
    <li><a href="https://www."target="_blank"> <i class="fa fa-twitter"></i></a></li>
    <li><a href="https://www."target="_blank"> <i class="fa fa-whatsapp"></i></a></li>
    <li><a href="https://www."target="_blank"> <i class="fa fa-youtube"></i></a></li>
  </ul>		
  <ul>
    <li><a href="login.php"target="_blank"> <i class="fa fa-user"></i></a></li>
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
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="images/slider/1.jpg" alt="Slide 1"></li>
        <li><img src="images/slider/2.jpg" alt="Slide 2"></li>
        <li><img src="images/slider/3.jpg" alt="Slide 3"></li>
      </ul>
    </div>
  </div>
  
</div>
<!-- header end -->
<div class="clear"></div>

<!-- team start -->
<div class="templatemo_team_wrapper" id="templatemo_team_page">
  <div class="container">
    <div class="row">
      <h1>Propiedades</h1>
      <div class="col-md-12 templatemo_workmargin">Alquiler</div>
      <div id="w">
        <div class="crsl-items" data-navigation="navbtns">
          <div class="crsl-wrap">

          <?php
            include "conexion.php";

            $query = "SELECT * FROM alquiler";
            $resultado = $conn->query($query);

            while ($row = $resultado->fetch_assoc()) {
          ?>

            <!-- post #1 -->
            <div class="crsl-item"><img height="100px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>">
              <div class="templatemo_team_name"><?php echo $row['aUbicacion']; ?> </div>
              <div class="templatemo_team_post"><?php echo $row['aMCuadrados']; echo " m2"; ?></div>
              <div class="templatemo_social">
                <ul>
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                  <li><a href="#"><span class="fa fa-skype"></span></a></li>
                </ul>
              </div>
            </div>
            <?php
            }
            ?>
            
            </div>
          <!-- @end .crsl-wrap --> 
        </div>
        <!-- @end .crsl-items --> 
      </div>
      <div class="clear"></div>
      <nav class="slidernav">
        <div id="navbtns" class="clearfix"><a href="#" class="previous"><img src="images/slideitmoo_back.png" alt="previous"></a> <a href="#" class="next"><img src="images/slideitmoo_forward.png" alt="next"></a></div>
      </nav>
    </div>

    <script>
	$(function() {
		$('.crsl-items').carousel({
			visible: 4,
			itemMinWidth: 180,
			itemEqualHeight: 370,
			itemMargin: 9,
		});
		$("a[href=#]").on('click', function(e) {
			e.preventDefault();
		});
	});
    </script>
  </div>
</div>
<!-- team end -->
<div class="clear"></div>

<!-- footer start -->
<div class="templatemo_footerwrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">Copyright &copy; 2084 <a href="#">Company Name</a> | Design: <a href="http://www.templatemo.com">templatemo</a></div>
    </div>
  </div>
</div>
<!-- footer end --> 

</body>
</html>