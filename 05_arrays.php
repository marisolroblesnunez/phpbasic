<?php
/**
*Los arrays son estructuras de datos que permitenh almacenar multiples valores en una sola variable
*en PHP existen tres tipos de arrays:
*1.Arrays indexados
*2.Arrays asociativos
*Arrays multidimensionales


*Arrays indexados*/
$frutas = array("manzana", "Pera", "Naranja");

//Forma mas comun
$frutas2 = ["limon","pomelo","Fresa"];

//asignar valores
$colores = array ("azul");
$colores[0];

//acceder a los elementos
echo $frutas[0];
echo $frutas[1];

//Arrays asociativos estas dos formas son iguales
$edad = array("Juan"=> 35, "Maria"=>28, "Pedro"=>42);
$edad2 = ["Juan"=> 35, "Maria"=>28, "Pedro"=>42];

$empleados = array(
    array("Juan", "López"),
    array("Maria","gonzalez"),
    array("pedro", "Sanchez"),
);

$productos = array(
    "frutas"=> array(
        "Tropical"=> array("mango", "piña"),
        "citricos"=> array("naranja","limon"),
    ),
    "verduras"=> array("zanahoria", "apio")
);

//productos de javi vi: id, nombre, descripcion, precio, tallas(s,m.l,xl), url, caracteristicas

$productosJavi= array(
    "id"=> 0,
    "nombre"=> "Arnés",
    "descripcion"=>"Diseño etnico con material ecologico",
    "precio"=> 24.99,
    "tallas"=>["s","m","l","xl"],
    "url"=> "img/arnes.jpg",
    "caracteristicas"=>["Ajuste ergonomico", "tecnologia anti tirones", "diseñado para evitar rozaduras"
    ]);
//acceder a la url
echo $productosJavi['url'];

//acceder a diseñado para evitar rozaduras
echo $productosJavi['caracteristicas'][2];

$productosJavi2 = [
    [
    "id"=> 1,
    "nombre"=> "Arnés",
    "descripcion"=>"Diseño etnico con material ecologico",
    "precio"=> 24.99,
    "tallas"=>["s","m","l","xl"],
    "url"=> "img/arnes.jpg",
    "caracteristicas"=>["Ajuste ergonomico", "tecnologia anti tirones", "diseñado para evitar rozaduras"]
    ],
    [
    "id"=> 2,
    "nombre"=> "Arnés",
    "descripcion"=>"Diseño etnico con material ecologico",
    "precio"=> 24.99,
    "tallas"=>["s","m","l","xl"],
    "url"=> "img/arnes.jpg",
    "caracteristicas"=>["Ajuste ergonomico", "tecnologia anti tirones", "diseñado para evitar rozaduras"]
    ],
    [   "id"=> 3,
    "nombre"=> "Arnés",
    "descripcion"=>"Diseño etnico con material ecologico",
    "precio"=> 24.99,
    "tallas"=>["s","m","l","xl"],
    "url"=> "img/arnes.jpg",
    "caracteristicas"=>["Ajuste ergonomico", "tecnologia anti tirones", "diseñado para evitar rozaduras"]]
    ];

    //recorrer un array con bucles
    $frutas2 = ["limon","pomelo","fresa"];
//count (nombreArray) es el numero de elementos del array
    //bucle for
    echo'<p>Frutas de temporada</p>';
    echo'<ul>';
    for($i = 0; $i <count($frutas2); $i++){
        echo'<li>'.$frutas2[$i].'</li>';
       
     }
     echo'</ul>';

    //bucle foreach para arrays indexados
    foreach($frutas2 as $fruta){
        echo"$fruta <br>";
    }

    //bucle foreach para arrays asociativos
    $edad = array("juan"=> 35, "maria"=> 28, "pedro"=>42);
    echo'<br>';
    foreach($edad as $clave => $valor){
        echo "$clave tiene $valor años. <br>";
    }
    echo'<br>';
    
    //ejercicio: Crea un array con 5 productos de supermercado. Muestra los productos en formato de lista en HTML

    $supermercado = array("manzanas", "peras","leche", "batidos", "chocolate");
    echo'<p>Frutas</p>';
    echo'<ul>';
    for("$i = 0"; $i <count($supermercado); $i++){
        echo'<li>'.$supermercado[$i].'</li>';
       
     }
     echo'</ul>';
     
     foreach($supermercado as $producto){
        echo"<li>$producto</li>";
     }
    echo '</ul>';

    //crea un array asociativo con nombres y numeros de teléfono.
    //muestra la informacion en una tabla html

    $contactos = array("marisol"=>658569558, "jesus"=> 66526, "lucia"=> 5552255);
    echo'<table border="1">';
    echo'<tr><th>Nombre</th><th>telefono</th></tr>';
    foreach($contactos as $nombre => $telefono){
        echo "<tr>
        <td>$nombre</td>
        <td>$telefono</td>
        </tr>";
    }
    echo'</table>';
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