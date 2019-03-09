<?php
    require_once 'util.php';

function viewQuery($result){
    if(mysqli_num_rows($result) > 0){
        echo '<table border="1"><tr>';
        echo '<td>'.'ID'.'</td>';
        echo '<td>'.'Nombre'.'</td>';
        echo '<td>'.'Unidades'.'</td>';
        echo '<td>'.'Cantidad'.'</td>';
        echo '<td>'.'Precio'.'</td>';
        echo '<td>'.'País'.'</td>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['units'].'</td>';
            echo '<td>'.$row['quantity'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['country'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
?>
<!DOCTYPE html>
        <html lang="en">
        <!-- Stylesheet =============================== -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <head>
          <meta charset="utf-8">
          <title>Lab 14. Desarrollo de Aplicaciones Web</title>
        </head>
        <body class="hello">
          <header>
            <h1>DAW - BD</h1>
            <h2>Irving Alain Aguilar Perez</h2>
          </header>
          <div class="topnav">
                <a class="active" href="index.php">Inicio</a>
                <a href="#referencias">Referencias</a>
            </div>
            <br>
            <header>
                <div>
                    <h2><a href="test.php">GetFruits</a></h2>
                    <?php
                        viewQuery(getFruits());
                    ?>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 1</h2>
                    <h3>¿Qué es ODBC y para qué es útil?</h3>
                    <br>
                    <h4>Open Data Base Conectivity, permite acceder a cualquier dato desde cualquier aplicación, sin importar qué sistema de gestión de bases de datos (DBMS) almacene los datos.
                      
                      [1]
                      </h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 2</h2>
                    <h3>¿Qué es SQL Injection?</h3>
                    <br>
                    <h4>Enviar instrucciones SQL de forma maliciosa dentro del código SQL programado para la manipulación de bases de datos.
                      
                      <br><br>[2]</h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 3</h2>
                    <h3>¿Qué técnicas puedes utilizar para evitar ataques de SQL Injection?
                        </h3>
                    <br>
                    <h4>Bloquear los caracteres especiales utilizados en las consultas SQL con \, verificar siempre los input del usuario y uso de RBAC.

                      [3]</h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2 id="referencias">Referencias shidas</h2>
                    <h3>[1] http://www.w3schools.com/php/php_mysql_intro.asp.</h3>
                    <h3>[2] https://www.owasp.org/index.php/SQL_Injection_Prevention_Cheat_Sheet</h3>
                    <h3>[3] https://www.owasp.org/index.php/SQL_Injection_Prevention_Cheat_Sheet</h3>
                </div>
            </header>
        </body>
        </html>