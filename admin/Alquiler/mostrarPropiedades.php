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
    <title>Propiedades en Venta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>


    <div class="social">
    <ul>
        <li><a href='../Administrador/salir.php'>Cerrar sesion</a></li>
    </ul>		
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Navegación</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../Administrador/paginaUsuario.php">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../Venta/mostrarPropiedades.php">Propiedades en Venta</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="mostrarPropiedades.php">Propiedades en Alquiler</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../Blog/mostrarBlog.php">Mensajes/Blog</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>


   <div class="table-responsive">
   <table class="table table-striped">
       <thead>
           <tr>
               <th colspan="13">
                   <a href="añadirPropiedad.php"> <center>Nuevo</center> </a> 
               </th>
           </tr>
           <tr>
               <th>id</th>
               <th>Ubicación</th>
               <th>Cuartos</th>
               <th>Baños</th>
               <th>Garages</th>
               <th>Pisos</th>
               <th>Habitantes</th>
               <th>Metros Cuadrados</th>
               <th>Precio</th>
               <th>Tipo de Propiedad</th>
               <th>Mascotas</th>
               <th>Fotografia</th>
               <th>Operaciones</th>
           </tr>
       </thead>
       <tbody>
           <?php
           include "conexion.php";

           $query = "SELECT * FROM alquiler";
           $resultado = $conn->query($query);

           while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
            <td> <?php echo $row['idAlquiler']; ?> </td>
            <td> <?php echo $row['aUbicacion']; ?> </td>
            <td> <?php echo $row['aCuartos']; ?> </td>
            <td> <?php echo $row['aBaños']; ?> </td>
            <td> <?php echo $row['aGarages']; ?> </td>
            <td> <?php echo $row['aPisos']; ?> </td>
            <td> <?php echo $row['aHabitantes']; ?> </td>
            <td> <?php echo $row['aMCuadrados']; echo " m2"; ?> </td>
            <td> <?php echo $row['aPrecio']; echo " $";?> </td>
            <td> <?php echo $row['aTipoPropiedad'];?> </td>
            <td> <?php echo $row['aMascota'];?> </td>
            <td> <img height="100px" width="200px" src="data:image/jpg;base64, <?php echo base64_encode($row['aImagen']);?>"> </td>
            <th> <a href="editarPropiedades.php?id=<?php echo $row['idAlquiler'];?>">Modificar</a></th>
            <th> <a href="eliminar.php?id=<?php echo $row['idAlquiler'];?>">Eliminar</a></th>
            </tr>
           <?php
           }
           ?>
           
       </tbody>
    </table>
   </div>
</body>
</html>