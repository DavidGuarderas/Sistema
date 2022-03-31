<!DOCTYPE html>
<html lang="es-ES">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />
	<link href="./styles/practica7.css" rel="stylesheet" type="text/css" />
	<link href="./styles/formulario.css" rel="stylesheet" type="text/css" />
	<link href="./styles/resets.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="./styles/colors.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Registro</title>
</head>

<body>
	<div class="container">

	</div>
	<header>
		
	</header>
	<main>
		<div class="col-12">

			<h1>INMOKRAFT.</h1>
			<form action="insertar.php" method="POST">
				<!-- inmueble-->
				<div class='field'>
					<label>INMUEBLE</label>
					<select name='inmueble' required>
						<option selected disabled>Sel. una opción</option>
						<option value="APARTAMENTO">APARTAMENTO</option>
						<option value="CASA">CASA</option>
						<option value="FINCA">FINCA</option>
						<option value="TERRENO">TERRENO</option>
					</select>
				</div>
	
				<!-- ubicacion-->
				<div class='field'>
					<label>UBICACION</label>
					<select name='ubicacion' required>
						<option selected disabled>Sel. una opción</option>
						<option value="NORTE">NORTE</option>
						<option value="SUR">SUR</option>
						<option value="VALLE">VALLE</option>
						<option value="CENTRO" >CENTRO</option>
						<option value="LOS VALLES" >LOS VALLES</option>
					</select>
				</div>
	
				<div class='field'>
				<!-- tipo-->
					<label>TIPO</label>
					<select name='tipo' required>
						<option selected disabled>Sel. una opción</option>
						<option value="ALQUILER">ALQUILER</option>
						<option value="VENTA">VENTA</option>
					</select>
				</div>
	
				<div class='field'>
				<!-- mascota-->
					<label>MASCOTAS</label>
					<input type="number" id="mascota" name="mascota" placeholder="Complete...">
				</div>
	
				<div class='field'>
					<!-- mascota-->
						<label>HABITACIONES</label>
						<input type="number" id="habi" name="habitaciones" placeholder="Complete...">
					</div>
	
					<div class='field'>
						<!-- tipo-->
							<label>GARAGE</label>
							<select name='garage' required>
								<option selected disabled>Sel. una opción</option>
								<option value="SI">SI</option>
								<option value="NO">NO</option>
							</select>
						</div>
	
				<div class="input-group mb-1">
					<span class="input-group-text">$</span>
					<input  class="form-control"  type="number" name="presupuesto" >
				  </div>
	
				<div class='field'>
					<label>TELEFONO</label>
					<input name='telefono' />
				</div>
	
				<div class='textBox'>
					<label>Otros datos</label>
					<textarea type="text" id="Otros" name="otros_datos" placeholder="Complete..."></textarea>
				</div>
				
				<div class='submit'>
					<button>
						ENVIAR
					</button>
					
		</div>
	
		</form>
	</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>