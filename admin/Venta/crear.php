<?php

include "conexion.php";

$ubicacion = $_POST['ubicacion'];
$cuartos = $_POST['cuartos'];
$baños = $_POST['baños'];
$garages = $_POST['garages'];
$pisos = $_POST['pisos'];
$mCuadrados = $_POST['mCuadrados'];
$precio = $_POST['precio'];
$tipoPro = $_POST['tipoPropiedad'];

$imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));

$query = "INSERT INTO venta (vUbicacion, vCuartos, vBaños, vGarages, vPisos, vMCuadrados, vPrecio, vTipoPropiedad, vImagen) 
                VALUES('$ubicacion', '$cuartos', '$baños', '$garages', '$pisos', '$mCuadrados', '$precio', '$tipoPro', '$imagen')";

$resultado = $conn->query($query);

if ($resultado == 1) {
    
header ("Location: mostrarPropiedades.php");

}else{
    echo "Aun no";
} 
?>