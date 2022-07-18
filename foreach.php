<?php

//Bucle foreach

//array
$array[] = "andres";
$array[] = "camilo";
$array[] = "maria";
$array[] = "sofia";
$array[] = "juan";

foreach($array as $value){
    echo $value;
    echo "<br/>";
}


foreach($array as $key => $value){
    echo "posicio: " . $key . " el nombre es: " . $value;
    echo "<br/>";
}



//recorrer un array multidimensional

$notas = array(
    '0' => array('materia' => "Ingles", "nombre" => "sonia", "nota" => 4.1),
    '1' => array('materia' => "Español", "nombre" => "Kevin", "nota" => 1.2),
    '2' => array('materia' => "Matematicas", "nombre" => "maria", "nota" => 3.6),
    '3' => array('materia' => "Ingles", "nombre" => "Daniela", "nota" => 4.5),
);

echo "---------------------------------------------------------------";
echo "<br/>";

foreach($notas as $key => $value){
    echo "la materia: " . $value["materia"]. " Persona: " . $value["nombre"]. " la nota es: " . $value["nota"];
    echo "<br/>";
}




?>