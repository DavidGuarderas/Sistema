<?php

include ("../../css/componentes.html");

session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("Location: ../../login.php");
}else{
    echo " <h1>Bienvenido Administrador $usuario</h1> ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Disponibles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <div class="table-responsive">
   <table class="table table-striped">
       <thead>
           <tr>
               <th colspan="13">
                   <a href="crearUsuario.php"> <center>Nuevo</center> </a> 
               </th>
           </tr>
           <tr>
               <th>id</th>
               <th>Usuario</th>
               <th>Email</th>
               <th>Operaciones</th>
           </tr>
       </thead>
       <tbody>
           <?php
           include "../../conexion.php";

           $query = "SELECT * FROM tipoUsuario";
           $resultado = $conn->query($query);

           while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
            <td> <?php echo $row['idTipoUsuario']; ?> </td>
            <td> <?php echo $row['uUsuario']; ?> </td>
            <td> <?php echo $row['uEmail']; ?> </td>
            <th> <a href="editarUsuario.php?id=<?php echo $row['idTipoUsuario'];?>">Modificar</a></th>
            <th> <a href="eliminarUsuario.php?id=<?php echo $row['idTipoUsuario'];?>">Eliminar</a></th>
            </tr>
           <?php
           }
           ?>
           
       </tbody>
    </table>
   </div>

</body>
</html>