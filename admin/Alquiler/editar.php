<?php

    include "conexion.php";

    $id = $_REQUEST['id'];

    $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    $ubicacion = $_POST['ubicacion'];
    $cuartos = $_POST['cuartos'];
    $baños = $_POST['baños'];
    $garages = $_POST['garages'];
    $pisos = $_POST['pisos'];
    $habitantes = $_POST['habitantes'];
    $mCuadrados = $_POST['mCuadrados'];
    $precio = $_POST['precio'];
    $tipoPro = $_POST['tipoPropiedad'];
    $mascota = $_POST['mascotas'];


    $query = "UPDATE alquiler SET aUbicacion='$ubicacion',aCuartos='$cuartos', aBaños='$baños', aGarages='$garages', aPisos='$pisos', aHabitantes='$habitantes' ,aMCuadrados='$mCuadrados', aPrecio='$precio', aImagen='$imagen', aTipoPropiedad='$tipoPro', aMascota='$mascota'
                            WHERE idAlquiler='$id'";

    $resultado = $conn->query($query);

    if ($resultado) {
        
        header ('Location: mostrarPropiedades.php');

    }else{
        echo "Falta poco";
    } 
?>