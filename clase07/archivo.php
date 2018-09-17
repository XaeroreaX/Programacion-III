<?php

var_dump($_FILES);

$nombre = $_FILES["archivo"]["name"];

$destino = "archivo/". $_FILES["archivo"]["name"];

if(move_uploaded_file($nombre, $destino))
{
    echo "el archivo". $nombre. "ha sido subido";
}
else
{
    echo "ha ocurrido un error";
}






?>