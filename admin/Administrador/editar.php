<?php

    include "../../conexion.php";

    $id = $_REQUEST['id'];

    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];


    $query = "UPDATE tipoUsuario SET uUsuario='$usuario', contraseña='$contraseña', uEmail='$correo'
                            WHERE idTipoUsuario='$id'";

    $resultado = $conn->query($query);

    if ($resultado) {
        
        header ('Location: mostrarUsuarios.php');

    }else{
        echo "Falta poco";
    } 
    
?>