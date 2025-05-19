<?php
$texto = "El batracio amarillo";

//la longitud de un string
echo strlen($texto);
echo"<br>";
var_dump($texto);

//eliminar espacios del principio y del final de un string
$texto2 = "         En un lugar de la Mancha...       ";
echo strlen($texto2);
echo"<br>";
var_dump($texto2);
echo"<br>";
$texto2 = trim($texto2);
echo strlen($texto2);//este tambien se utiliza para dar informacion, es parecido a var_dump pero solo te dice el numero de letras que tiene.
echo"<br>";
var_dump($texto2);
echo"<br>";


//convertir a mayusculas
echo strtoupper($texto2);
echo"<br>";

//concatenar string
//se concatena con el .
echo"Titulo ".$texto." publicado";
echo"<br>";
echo"Titulo $texto publicado";