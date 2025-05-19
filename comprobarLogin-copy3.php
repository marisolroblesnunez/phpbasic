<?php
// var_dump($_POST);

$mensaje= "";

//comprueba si es mayor de edad que sea mayor de 18 años
//mostrar estas logueado o no tienes acceso a esta web

function comprobarCredenciales($nombre, $clave){
    $nombreUsuario = "Antonia";
    $claveUsuario = "123456";
    //quitar los espacios de las variables
    $nombre = trim($nombre);
    $clave= trim($clave);
    return $nombreUsuario === $nombre && $claveUsuario === $clave;
}

//comprobar que llegan los datos: nombre, clave y edad
//comprobar que las credenciales son válidas
//comprobar que la edad es mayor o igual a 18
$existenDatos = isset($_POST['nombre']) && isset($_POST['password']) && isset($_POST['edad']);
$credencialesValidas = comprobarCredenciales($_POST['nombre'], $_POST['password']);
$esMayor = $_POST['edad'] >= 18;

if($existenDatos && $credencialesValidas && $esMayor){
    $mensaje = "Tienes acceso";
}else{
    $mensaje = "No tienes acceso";
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