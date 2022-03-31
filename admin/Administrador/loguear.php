<?php

error_reporting(0); //ocultar error

include "../../conexion.php";
include ("../../css/componentes.html");

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['contraseña'];

$query= "SELECT * FROM tipoUsuario WHERE uUsuario = '$usuario' AND  contraseña='$clave' ";
$consulta = mysqli_query($conn, $query);
$array=mysqli_fetch_array($consulta);

if ($array['idRol']==1) {
    $_SESSION['username'] = $usuario;
    header("Location: paginaAdmin.php");
} else if ($array['idRol']>=2) {
    $_SESSION['username'] = $usuario;
     header("Location: paginaUsuario.php");
}else{
    ?>
    <?php
        header("Location: ../../login.php");
    ?>
    <?php
}
mysqli_free_result($consulta);
mysqli_close($conn);

?>