<?php
session_start();
    if(isSet($_POST['submit'])){
        if(empty($user) && !filter_var($user, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'>* Escribe tu nombre de usuario </p>";
        }else{
            if(strlen($user) > 20){
                echo "<p class='error'>* Error: usuario, utilice solamente 10 caracteres </p>";
            }
        }
        if(empty($password)){
            echo "<p class='error'>* Escribe tu password </p>";
        }
    }
    if (isSet($_POST['user']) && isSet($_POST['password'])) {
        header("Location:assets/php/panel-form.php");
    }
?>