<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "cobrakai";
    $conexion = mysqli_connect($server, $user, $password, $db);
    if(!$conexion){
        die('Error de Conexion ' . mysqli_connect_errno());
    }
?>