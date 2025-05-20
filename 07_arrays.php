<?php
//Búsqueda en arrays
$frutas = ["Pera", "Manzana", "Sandía"];

//comprobar si un elemento existe en el array
if(in_array("Sandía", $frutas)){
    echo"<p>Tenenos Sandía</p>";
}else{
    echo "<p>Hay que comprar Sandía</p>";
}

$edades = array("Juan"=> 35, "Maria" =>28, "pedro"=>42);

if(isset($edades['Maria'])){
    echo"<p>Maria esta en el grupo</p>";
}else{
    echo"<p>Falta Maria</p>";
}