<?php
    if(isset($_POST['submit'])){
        if(empty($user) && !filter_var($password, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'>* Escribe tu nombre de usuario </p>";
        }else{
            if(strlen($user) > 20){
                echo "<p class='error'>* Utilice solamente 20 caracteres </p>";
            }
        }
        if(empty($password)){
            echo "<p class='error'>* Escribe tu contraseña </p>";
        }else{
            if(!is_numeric($password) && strlen($password) == 10){
                echo "<p class='error'>* El password solo admite 10 caracteres numéricos </p>";
            }
        }
    }
    if(isSet($_POST['user']) && isSet($_POST['password'])) {
        header("Location:assets/php/panel-form.php");
    }
?>