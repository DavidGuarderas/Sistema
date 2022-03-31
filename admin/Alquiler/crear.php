<?php
include "conexion.php";

$ubicacion = $_POST['ubicacion'];
$cuartos = $_POST['cuartos'];
$baños = $_POST['baños'];
$garages = $_POST['garages'];
$pisos = $_POST['pisos'];
$habitantes = $_POST['habitantes'];
$mCuadrados = $_POST['mCuadrados'];
$precio = $_POST['precio'];

$imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));

$tipoPro = $_POST['tipoPropiedad'];
$mascota = $_POST['mascotas'];

$query = "INSERT INTO alquiler (aUbicacion, aCuartos, aBaños, aGarages, aPisos, aHabitantes, aMCuadrados, aPrecio, aImagen, aTipoPropiedad, aMascota) 
                VALUES('$ubicacion', '$cuartos', '$baños', '$garages', '$pisos','$habitantes', '$mCuadrados', '$precio', '$imagen', '$tipoPro', '$mascota')";

$resultado = $conn->query($query);

if ($resultado == 1) {
    
header ("Location: mostrarPropiedades.php");

}else{
    echo "Aun no...................";
} 
?>
	