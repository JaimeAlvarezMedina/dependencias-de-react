<?php

include('cabecera.php');
include('conexion.php');

$url=$_POST["url"];
$usuario=$_POST["usuario"];

if($url!=""){
    $consulta=("UPDATE usuarios SET Fondo='$url' WHERE Usuario='$usuario'");
    $conexion->query($consulta);/* La ejecutamos */
    echo json_encode("Disponible");
}


?>