<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <?php
      include ("css/componentes.html");
    ?>
</head>
<body>

   <form action="admin/Administrador/loguear.php" method="POST">
       <h1 class="animate__animated animate__backInLeft">Identificación de Usuario</h1>
        <label class="form-label">Usuario</label>
        <input type="text" class="form-control" placeholder="ingrese su nombre" name="usuario">
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" placeholder="ingrese su contraseña" name="contraseña">
        <input type="submit" class="btn btn-primary" value="Ingresar">
   </form> 
  
</body>
</html>