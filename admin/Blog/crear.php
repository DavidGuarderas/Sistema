<?php

include "conexion.php";

$titulo = $_POST['titulo'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO blog (titulo, Mensaje) VALUES('$titulo', '$mensaje')";

$resultado = $conn->query($query);

if ($resultado == 1) {
    
header ("Location: mostrarBlog.php");

}else{
    echo "Aun no";
} 
?>
	