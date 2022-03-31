<?php

    include "conexion.php";

    $id = $_REQUEST['id'];

    $titulo = $_POST['titulo'];
    $mensaje = $_POST['mensaje'];


    $query = "UPDATE blog SET titulo='$titulo', Mensaje='$mensaje' 
                            WHERE idBlog='$id'";

    $resultado = $conn->query($query);

    if ($resultado) {
        
        header ('Location: mostrarBlog.php');

    }else{
        echo "Falta poco";
    } 
    
?>