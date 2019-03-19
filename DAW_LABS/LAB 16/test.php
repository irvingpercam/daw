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
          <title>Lab 16. Desarrollo de Aplicaciones Web</title>
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
                    <?php require_once("fruit.php");?>
                    <h2>Agregar fruta</h2>
                    ID <input type="text" name="id"><br>
                    Name <input type="text" name="name"><br>
                    Unidades <input type="text" name="units"><br>
                    Cantidad <input type="text" name="quantity"><br>
                    Precio <input type="text" name="price"><br>
                    País <input type="text" name="country"><br>
                    <input type="submit" name="insert_fruit">
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Ver todas las frutas</h2>
                    <?php
                        viewQuery(getFruits());
                    ?>
                </div>
                <div>
                    <h2>Pregunta 1</h2>
                    <h3>¿Por qué es una buena práctica separar el modelo del controlador?</h3>
                    <br>
                    <h4>El controlador establece la interaccion entre interfaz y modelo, y el modelo se relaciona con la entidad, en este caso las tablas.
                      
                      [1]
                      </h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 2</h2>
                    <h3>¿Qué es SQL Injection y como se puede prevenir?</h3>
                    <br>
                    <h4>Enviar instrucciones SQL de forma maliciosa dentro del código SQL programado para la manipulación de bases de datos. Se puede prevenir parametrizando las consultas de SQL.
                      
                      <br><br>[2]</h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2 id="referencias">Referencias shidas</h2>
                    <h3>[1] http://www.w3schools.com/php/php_mysql_intro.asp.</h3>
                    <h3>[2] https://geeks.ms/gtorres/2010/10/29/tips-para-evitar-sql-injection/</h3>
                </div>
            </header>
        </body>
        </html>