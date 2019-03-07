<?php
    if(isset($_POST['submit'])){
        if(empty($nombre)){
            echo "<p class='error'>* Agrega tu nombre </p>";
        }else{
            if(strlen($nombre) > 20){
                echo "<p class='error'>* El nombre es demasiado largo </p>";
            }
        }
        if(empty($edad)){
            echo "<p class='error'>* Agrega tu edad </p>";
        }else{
            if(!is_numeric($edad)){
                echo "<p class='error'>* La edad solo admite caracteres numéricos </p>";
            }
        }
        if(empty($usuario)){
            echo "<p class='error'>* Agrega tu correo </p>";
        }else{
            if(strlen($usuario) > 10){
                echo "<p class='error'>* Utilice solamente 10 caracteres </p>";
            }
        }
        if(empty($correo)){
            echo "<p class='error'>* Agrega tu correo </p>";
        }else{
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* La dirección de correo electrónico no es válida </p>";
            }
        }
        if(empty($phone)){
            echo "<p class='error'>* Agrega tu teléfono </p>";
        }else{
            if(!is_numeric($phone) && strlen($phone) == 10){
                echo "<p class='error'>* El número telefónico solo admite 10 caracteres numéricos </p>";
            }
        }
    }
    if (isSet($_POST['nombre']) && isSet($_POST['edad'])  && isSet($_POST['usuario']) && isSet($_POST['correo']) && isSet($_POST['phone'])) {
        include('result-view.php');
    }
    if (isSet($_GET['correo'])) {
        $correo = $_GET['correo'];
        include('class-view.php');
    }
?>