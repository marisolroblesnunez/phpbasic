<?php
// var_dump($_POST);

$mensaje= "";

//comprueba si es mayor de edad que sea mayor de 18 años
//mostrar estas logueado o no tienes acceso a esta web



if (isset($_POST['edad']) && $_POST['edad']>=18){
    $mensaje = "Eres mayor de edad";
} else{
    $mensaje = "no tienes acceso";
   

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