<?php
    session_start();
    $varsession = $_SESSION['user'];
    if($varsession == null || $varsession == ''){
        echo 'Usuario no autorizado';
        die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registro de usuarios</title>
    </head>
    <body>
        <p>
            Tu usuario <strong><?php echo $_SESSION['user'] ?></strong> ha quedado registrado.<strong>
        </p>
        <a href=".../login.php">Registra a otro usuario</a>
    </body>
</html>