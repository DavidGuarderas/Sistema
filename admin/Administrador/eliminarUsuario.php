<?php 
	include "../../conexion.php";

	$id=$_REQUEST['id'];

	$sql="DELETE FROM tipoUsuario WHERE idTipoUsuario='$id'";
	$result=mysqli_query($conn,$sql);

    if ($result==1) {
        header("Location: mostrarUsuarios.php");
    }else{
        echo "Aun no";
    }

?>