
<?php
var_dump($_GET);
$nombre = $_GET["nombre"];
$frase = $_GET["frase"]; //siempre hay que poner ; porque si no da error
echo($nombre); //para mostrar por pantalla se pone echo y entre parentesis lo que queremos que ponga en pantalla
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludando</title>
</head>
<body>
    <h1>Buen fin de semana <?php echo $nombre; ?></h1>
    <h3> <?php echo $frase; ?></h3>
</body>
</html>