<?php
session_start();
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"> 
        <title>Acceder</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Import style.css-->
      <link type="text/css" rel="stylesheet" href="style.css"  media="screen,projection"/>
    </head>
    <body onload="document.getElementById('id01').style.display='block'" style="width:auto;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row login">
            <div class="col s12 14 offset-14">
                <div class="card">
                    <div class="card-action blue darken-4 white-text center-align"> 
                    <h3>Mundo Maya</h3>
                    </div>
                    <div class="card-content">
                        <div class="form-field">
                            <label for="user">Usuario</label>
                            <input type="text" id="user" name="user">
                        </div><br>

                        <div class="form-field">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password">
                        </div><br>

                        <div class="form-field">
                            <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span>Recuérdame</span>
                            </label>
                        </div><br>

                        <div class="form-field center-align">
                        <button type="submit" name="submit" class="btn-large blue darken-4">Acceder</button>
                        <?php
                            include("assets/php/validation.php");
                        ?>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <script src="assets/js/login.js"></script>
    </body>
</html>