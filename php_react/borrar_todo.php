<?php
    include("cabecera.php");
    include("Conexion.php"); 

    
    $consulta = ("DELETE FROM comentarios");/* Hacemos la consulta */
    $conexion->query($consulta);/* La ejecutamos */
    echo json_encode("Borrado");

?>