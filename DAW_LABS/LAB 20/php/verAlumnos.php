<?php
	include ("dbconnect.php");
	$query ="SELECT * FROM Alumnos ORDER BY id ASC";
	$resultado = mysqli_query($conexion, $query);
    if(!$resultado){
        die("Error");
    }else{
        while($data = mysqli_fetch_assoc($resultado)){
            $arreglo["data"][] = array_map("utf8_encode", $data);
        }
        echo json_encode($arreglo);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);