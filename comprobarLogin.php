<?php
// var_dump($_POST);
$nombreUsuario = "marisol";
$clave = "123456";
$mensaje= "";
$nombreEntrada = trim($_POST['nombre']);
$claveEntrada = trim($_POST['password']);


if (isset($_POST['nombre']) && isset($_POST['password'])){
    $nombreEntrada = trim($_POST['nombre']);
    $claveEntrada = trim($_POST['password']);


    if ($nombreUsuario === $nombreEntrada && $claveEntrada){
        $mensaje = "Enhorabuena " .$_POST['nombre']. " Te has logeado correctamente";
        
    }else{
        $mensaje = "usuario o contraseña incorrecto";
    }
} else {
    $mensaje = "datos insuficientes";
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