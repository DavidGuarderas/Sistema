<?php 
	include "conexion.php";

	$id=$_REQUEST['id'];

	$sql="DELETE FROM blog WHERE idBlog='$id'";
	$result=mysqli_query($conn,$sql);

    if ($result==1) {
        header("Location: mostrarBlog.php");
    }else{
        echo "Aun no";
    }

?>