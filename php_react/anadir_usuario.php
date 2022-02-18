<?php
    include("cabecera.php");
    include("Conexion.php"); 

    try{
        $usuario=$_POST["usuario"];
        $contra=$_POST["contra"];
        $encontrado=false;

        if($usuario!="" && $contra!=""){
            $consulta=("SELECT * FROM usuarios");


            //Comprueba que el nombre de usuario no este en la base de datos
            foreach ($conexion->query($consulta) as $dato) {
                if($dato["Usuario"]==$usuario){  
                    echo json_encode("No disponible"); 
                    $encontrado=true;//Si lo encuentra lo cambiamos a false
                }
            }

            if($encontrado==false){
                $consulta = ("INSERT INTO usuarios (Usuario, Contra) VALUES ('$usuario','$contra')");/* Hacemos la consulta */
                $conexion->query($consulta);/* La ejecutamos */
                echo json_encode("Disponible");
            }
            
        }
        
    }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }
?>