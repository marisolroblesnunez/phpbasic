<?php
//definir variables

$nombre = "Pepito";
$nombre ="Pepito junior"; //aqui sobrescrivo la variable
$_nombre = "Manolita"; //esto es una variable diferente porque le puesto la barra _ 
echo $nombre;
//las variables ($) pueden comenzar con $_ 
// las variables pueden contener nunmeros pero no al comienzo
$nombre2 = "Javi"
//definir constantes
define("CLAVE", "secreta"); //las constantes se hacen poniendo define() y dentro el primer valor es el nombre que le quiero dar a la constante, y el segundo valor que le pongo es el significado que quiero que tenga, een este caso lo he puesto entre comillas el segundo valor porquue es un string, si fuera un numero no haria falta ponerlo entre comillas por ej: define("CLAVE", 222);, el nombre de la constante se suele poner en mayuscula para que sepamos que es una constante cuando luego la llamemos.

echo CLAVE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>