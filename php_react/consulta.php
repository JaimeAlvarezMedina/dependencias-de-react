<?php
    include("cabecera.php");
    include("conexion.php");
    try{ 
            $consulta = $conexion->prepare("SELECT * FROM comentarios ORDER BY ID DESC");// Hacemos la consulta 
            $consulta->execute();
            echo json_encode($consulta->fetchAll());
        }catch(PDOException $e){
            echo "ERROR: " . $e->getMessage();
        }
?>