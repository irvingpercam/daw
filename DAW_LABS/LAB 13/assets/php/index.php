<?php
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $phone = $_POST['phone'];
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registro de usuarios</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>
    <body>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1>Registro</h1>
                <label for="">Nombre:</label>
                <input type="text" name="nombre" placeholder="Primer nombre y apellido"  value="">
                <label for="">Edad:</label>
                <input type="text" name="edad" placeholder="Edad" value="">
                <label for="">Usuario:</label>
                <input type="text" name="usuario" placeholder="Usuario a 10 caracteres"  value="">
                <label for="">Correo Electrónico:</label>
                <input type="text" name="correo" placeholder="Correo" value="">
                <label for="">Teléfono:</label>
                <input type="text" name="phone" placeholder="Teléfono a 10 dígitos" value="">
                <input type="submit" name="submit">
                <?php
                    include("validate-form.php");
                ?>
            </form>
            <h2><a href="preguntas.html">Preguntas</a></h2>
    </body>
</html>