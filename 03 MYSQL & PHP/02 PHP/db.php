<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'netflix');
    // if($conexion){
    //     echo 'Estamos conectados';
    // }
    if(!$conexion){
        echo 'Fallo en la conexion';
    }
?>