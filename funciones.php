<?php

function saludarNombre(){
    echo "Holi danny";
}

function saludar(){
    echo "Holi :3 ...";
}

function despedir($nombre, $apellido){
    echo "Adio :c " . $nombre. " ". $apellido;
}


saludar();
saludarNombre();
echo "<br>";
despedir("Daniela", "Borrero");



?>