<?php

include "../../conexion.php";

$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$rol ='2';

$query = "INSERT INTO tipoUsuario (uUsuario, contraseña, uEmail, idRol) VALUES('$usuario', '$contraseña', '$correo', '$rol')";

$resultado = $conn->query($query);

if ($resultado == 1) {
    
header ("Location: mostrarUsuarios.php");

}else{
    echo "Aun no";
} 
?>