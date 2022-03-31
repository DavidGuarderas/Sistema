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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Cargar Propiedad</title>
</head>
<body>


<?php
  include "conexion.php";

  $id = $_REQUEST['id'];
  $query = "SELECT * FROM alquiler WHERE idAlquiler='$id'";
  $resultado = $conn->query($query);
  $row = $resultado->fetch_assoc();

?>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Consejo
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Aquí podras editar las propiedades ya creadas, si no Editas la información no se perdera pero asegurate de tener llenos todos los campos.
  </div>
</div>


<div class="container">		
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="editar.php?id=<?php echo $row['idAlquiler'];?>" enctype="multipart/form-data">
						<h4 class="text-center">Editar Propiedad en Venta</h4>
						<div class="form-group">
							<label class="col-sm-12 control-label">Fotografias</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="img" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<img height="200px" width="400px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 ">Direccion</label>
							<div class="col-sm-10">
								<select class="custom-select" name="ubicacion" value="<?php echo $row['aUbicacion'];?>" required>
									<option value="Centro">Centro</option>
									<option value="Norte">Norte</option>
									<option value="Sur">Sur</option>
									<option value="Los Valles">Los Valles</option>
									<option value="Calderon">Calderon</option>
								</select>
							</div>

              			<label class="col-sm-12 ">Cuartos</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="cuartos" value="<?php echo $row['aCuartos'];?>" required>
							</div>
              			<label class="col-sm-12 ">Baños</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="baños" value="<?php echo $row['aBaños'];?>" required>
							</div>
              			<label class="col-sm-12 ">Garages</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="garages" value="<?php echo $row['aGarages'];?>" required>
							</div>
              			<label class="col-sm-12 ">Pisos</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="pisos" value="<?php echo $row['aPisos'];?>" required>
							</div>
						<label class="col-sm-12 ">Habitantes</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="habitantes" value="<?php echo $row['aHabitantes'];?>" required>
							</div>
              			<label class="col-sm-12 ">Metros Cuadrados</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="mCuadrados" value="<?php echo $row['aMCuadrados'];?>" required>
							</div>
              			<label class="col-sm-12 ">Precio</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="precio" value="<?php echo $row['aPrecio'];?>" required>
							</div>
              			<label class="col-sm-12 ">Tipo de Propiedad</label>
						  	<div class="col-sm-10">
								<select class="custom-select" name="tipoPropiedad" required>
									<option value="Casa">Casa</option>
									<option value="Departamento">Departamento</option>
									<option value="Finca">Finca</option>
								</select>
							</div>
						<label class="col-sm-12 ">Mascotas</label>
							<div class="col-sm-10">
								<select class="custom-select" name="mascotas" required>
									<option value="Si">Si</option>
									<option value="No">No</option>
								</select>
							</div>
						<br>
						<input class="btn btn-primary" type="submit" value="Editar">
						</div>
					</form>
				</div>
			</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>