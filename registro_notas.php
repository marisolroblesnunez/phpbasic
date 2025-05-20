<?php
//Crea un array multidimensional para almacenar nombres de estudiantes y sus notas en diferentes asignaturas.
//Calcula la nota media de cada estudiante.
//Muestra una tabla con los datos de los estudiantes, sus notas y su nota media.

$alumnos = [
    "Rocío" => ["Matemáticas"=> 8, "Historia" => 7, "PHP" =>9],
    "Laura" => ["Matemáticas"=> 2, "Historia" => 9, "PHP" =>7],
    "Reich" => ["Matemáticas"=> 6, "Historia" => 7, "PHP" =>6],
    "Marisol" => ["Matemáticas"=> 10, "Historia" => 10, "PHP" =>10],
];

foreach($alumnos as $asignatura => $valor){
    echo"<hr>Nombre: ".$asignatura;
    echo"<br>Matemáticas: ". $valor['Matemáticas'];
    echo"<br>Historia: ". $valor['Historia'];
    echo"<br>PHP: ". $valor['PHP'];
    $notaMedia = ($valor["Matemáticas"]+$valor["Historia"]+$valor["PHP"]) /3;
    echo"<br>".$clave." tiene de nota media un ".round($notaMedia,2);
}


