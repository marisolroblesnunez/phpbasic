<?php
// var_dump($_POST);

$mensaje= "";

//comprueba el nombre y la clave del usuario
//devuelve verdadero o falso segun sean correctas las credenciales
function comprobarCredenciales($nombre, $clave){
    $respuesta= false;
    //llamo a la base de datos para que me devuelba el nombre y la clave del usuario
    $nombreUsuario = "marisol";
    $claveUsuario = "123456";
    //quitar los espacios a las variables
    $nombre = trim($nombre);
    $clave = trim($clave);
    return $nombreUsuario === $nombre && $claveUsuario === $clave;
}

//leer los datos de entrada
if (isset($_POST['nombre']) && isset($_POST['password']) && comprobarCredenciales($_POST['nombre'], $_POST['password'])){
    $mensaje = "Enhorabuena " . $_POST['nombre'] . "Te has logeado correctamente";
  
}else{
    $mensaje = "usuario o contraseña incorrecto ";
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logeado</title>
</head>
<body>
    <h1>Página de entrada</h1>
    <h2> Hola
        <?php 
    echo($mensaje);
        ?></h2>
</body>
</html>