<?php

include ("../../css/componentes.html");

session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("Location: ../../login.php");
}else{
    echo " <h1>Bienvenido Usuario $usuario</h1> ";
}
?>

<?php

    include "conexion.php";

    $id = $_REQUEST['id'];

    $ubicacion = $_POST['ubicacion'];
    $cuartos = $_POST['cuartos'];
    $baños = $_POST['baños'];
    $garages = $_POST['garages'];
    $pisos = $_POST['pisos'];
    $mCuadrados = $_POST['mCuadrados'];
    $precio = $_POST['precio'];
    $tipoPro = $_POST['tipoPropiedad'];

    $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));


    $query = "UPDATE venta SET vUbicacion='$ubicacion', vCuartos='$cuartos', vBaños='$baños', vGarages='$garages', vPisos='$pisos', vMCuadrados='$mCuadrados', vPrecio='$precio', vTipoPropiedad='$tipoPro', vImagen='$imagen' 
                            WHERE idVenta='$id'";

    $resultado = $conn->query($query);

    if ($resultado) {
        
        header ('Location: mostrarPropiedades.php');

    }else{
        echo "Falta poco";
    } 
    
?>