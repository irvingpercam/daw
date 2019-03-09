<?php
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;
    header("Location:panel-form.php");
?>