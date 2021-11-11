<?php
    
    $database = "db_student";

    $conexion = mysqli_connect("localhost", "root", "", "$database");
    mysqli_set_charset($conexion, "utf8");

    if($conexion){
        echo "Conexion exitosa";
    } else {
        echo "Conexion fallida";
    }
?>