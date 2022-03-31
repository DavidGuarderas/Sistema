<?php

include "conexion.php";
$Buscar = $_POST['inmueble'];
$Ubicacion = $_POST['ubicacion'];
$Presupuesto = $_POST['presupuesto'];
$Caracteristicas = $_POST['tipo'];
$Mascotas = $_POST['mascota'];
$Habitaciones = $_POST['habitaciones'];
$Garage = $_POST['garage'];
$Telefono = $_POST['telefono'];
$Otros=$_POST['otros_datos'];


$query = "INSERT INTO buscar ( BusTipoDePropiedad, Ubicacion,  BusPresupuesto, BusCaracteristicas, BusMascota, BusHabitaciones,BusGaraje, BusTelefono, BusOtros) 
                VALUES('$Buscar', '$Ubicacion', '$Presupuesto','$Caracteristicas', '$Mascotas', '$Habitaciones','$Garage', '$Telefono', '$Otros')";

$resultado=$conn->query($query); 
if($resultado){
header('Location:index.php');

}else{
    echo"error";
}

?>
