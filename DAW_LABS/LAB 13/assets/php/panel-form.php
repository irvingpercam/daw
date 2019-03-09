<?php
    session_start();
    $varsession = $_SESSION['user'];
    if($varsession == null || $varsession == ''){
        echo 'Usuario no autorizado';
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Panel de administración</h1>
    <h2>Bienvenido: <?php echo $_SESSION['user'] ?></h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>
    <br>
    <br>
    <a href="preguntas/preguntas.php">Preguntas</a>
    <br>
    <a href="close-session.php">Cerrar sesión</a>
</body>
</html>