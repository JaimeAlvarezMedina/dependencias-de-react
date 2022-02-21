<?php

include("cabecera.php");
include("conexion.php");

$usuario=$_POST["usuario"];

try{ 
    $consulta = $conexion->prepare("SELECT Fondo FROM usuarios where Usuario='$usuario'");// Hacemos la consulta 
    $consulta->execute();
    echo json_encode($consulta->fetchAll());
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}
?>