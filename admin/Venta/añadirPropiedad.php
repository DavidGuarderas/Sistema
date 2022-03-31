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

<div class="container">		
	<div class="panel panel-primary">
		<div class="panel-body">
					
			<form method="POST" action="crear.php" enctype="multipart/form-data">
				<h4 class="text-center">Cargar Propiedad en Venta</h4>
				<div class="form-group">
					<label class="col-sm-12 control-label">Fotografias</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" name="img" required>
					</div>
				</div>
					<div class="form-group">
						<label class="col-sm-12 ">Direccion</label>
						<div class="col-sm-10">
							<select class="custom-select" name="ubicacion" required>
								<option value="Centro">Centro</option>
								<option value="Norte">Norte</option>
								<option value="Sur">Sur</option>
								<option value="Los Valles">Los Valles</option>
								<option value="Calderón">Calderón</option>
							</select>
					</div>
              		<label class="col-sm-12 ">Cuartos</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="cuartos" required>
					</div>
              		<label class="col-sm-12 ">Baños</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="baños" required>
					</div>
             		 <label class="col-sm-12 ">Garages</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="garages" required>
					</div>
              		<label class="col-sm-12 ">Pisos</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="pisos" required>
					</div>
              		<label class="col-sm-12 ">Metros Cuadrados</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="mCuadrados" required>
					</div>
              		<label class="col-sm-12 ">Precio</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="precio" required>
					</div>
              		<label class="col-sm-12 ">Tipo de Propiedad</label>
			  		<div class="col-sm-10">
						<select class="custom-select" name="tipoPropiedad" required>
							<option value="Casa">Casa</option>
							<option value="Departamento">Departamento</option>
							<option value="Finca">Finca</option>
						</select>
					</div>
					<br>
					<input class="btn btn-primary" type="submit" value="Guardar">
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