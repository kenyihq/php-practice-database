<?php

    include 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $carrera = $_POST['carrera'];
    $tabla = 'estudiante';

    $query = "INSERT INTO $tabla(nombre, email, carrera) VALUES ('$nombre', '$email', '$carrera')";
    $resultado = mysqli_query($conexion, $query);

    if($resultado){
        echo "<script>alert('REGISTRO EXITOSO');window.location='/database-practice/Practice2/intefaz.php'</script>";
    }else{
        echo "<script>alert('ERROR AL REGISTRAR'); window.history.go(-1);</script>";
    }
?>