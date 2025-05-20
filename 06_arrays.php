<?php
//ordenar los elementos de un array
$numeros = [5,2,8,1,3];
sort($numeros);//ordenar de menor a mayor
//ordenar de mayot a menor 
//modifica el array
 rsort($numeros);//ordenar de mayor a menor
 print_r($numeros); //se utiliza para ver por pantalla los elementos de un array, porque con el echo no puedes mostrar los elementos de un array, solo un string
 foreach($numeros as $numero){
    echo"<p>$numero</p>";
 }
    $edades = array("juan" =>35, "maria"=>28);
    
    //ordenar arrays asociativos
    //por clave
    ksort($edades); //ksort se utiliza para ordenar por la clave
    foreach($edades as $clave => $valor){
        echo"<p>Nombre: $clave tiene $valor años</p>";
    }

    //por clave de mayor a menor ksort()
    //por valor de menor a mayot 
    asort($edades);
    foreach ($edades as $clave => $valor ){
        echo "<p>Nombre: $clave tiene $valor años</p>";
    }
    //sort()ordenar de menor a mayor
    //rsort() ordenar de mayor a menor
    //asort()asociativo ordenar el nombre de menor a mayor
    //arsort()asociativo ordenar el nombre de mayor a menor
    //ksort() ordenar por clave de menor a mayor
    //krsort()ordenar por clave de mayor a menor


    //agregar y eliminar elementos de un array
    $frutas = ["manzana","pera"];

    //agregar elementos de un array al final
    array_push($frutas);

    //eliminar los ultimos tres elementos
    array_splice($frutas, -3);

    //agregar elementos al principio
    array_unshift($frutas, "melon", "sandia");

    //eliminar el primer elemento
    array_shift($frutas);

    //eliminar un elemento especifico
    unset($frutas[1]);