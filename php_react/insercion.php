<?php
    include('cabecera.php');
    include("conexion.php");

    $comentario=$_POST["comentario"];
    $usuario=$_POST["usuario"];

    if($comentario!=""){
        $consulta=$conexion->prepare("INSERT INTO comentarios (Nombre_usuario,Comentario) VALUES ('$usuario','$comentario')");
        $consulta->execute();
    }
    echo json_encode("Funciona");
?>