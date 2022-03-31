<?php 
	include "conexion.php";

	$id=$_REQUEST['id'];

	$sql="DELETE FROM alquiler WHERE idAlquiler='$id'";
	$result=mysqli_query($conn,$sql);

    if ($result==1) {
        header("Location: mostrarPropiedades.php");
    }else{
        echo "Aun no";
    }

?>

