<DOCTYPE! html>
        <html lang="en">
        <!-- Stylesheet =============================== -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <head>
          <meta charset="utf-8">
          <title>Lab 13. Desarrollo de Aplicaciones Web</title>
        </head>
        <body class="hello">
          <header>
            <h1>DAW - BD</h1>
            <h2>Irving Alain Aguilar Perez</h2>
          </header>
          <div class="topnav">
                <a class="active" href="../panel-form.php">Inicio</a>
                <a href="#referencias">Referencias</a>
            </div>
            <br>
            <header>
                <div>
                    <h2>Pregunta 1</h2>
                    <h3>¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</h3>
                    <br>
                    <h4>Uno destruye la sesión y otra las variables.
                      
                      [1]
                      </h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 2</h2>
                    <h3>¿Cuál es la diferencia entre una variable de sesión y una cookie?</h3>
                    <br>
                    <h4>Las variables se guardan en el servidor y las cookies se guardan localmente.
                      
                      <br><br>[2]</h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 3</h2>
                    <h3>¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?
                        </h3>
                    <br>
                    <h4>Esto se realiza a través de una función que revisa que no se sobreescriba el nombre.

                      [3]</h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2>Pregunta 4</h2>
                    <h3>¿Qué es CSRF y cómo puede prevenirse?
                        </h3>
                    <br>
                    <h4>Hacer uso de ingeniería social para obtener datos de un usuario. Puede prevenirse utilizando aplicaciones de seguridad del lado del servidor.

                      [4]</h4>
                    <br>
                    <br>
                </div>
                <div>
                    <h2 id="referencias">Referencias shidas</h2>
                    <h3>[1] http://www.w3schools.com/php/php_sessions.asp</h3>
                    <h3>[2] http://php.net/manual/en/intro.session.php</h3>
                    <h3>[3] https://developers.facebook.com/docs/php/FacebookSession/5.0.0</h3>
                    <h3>[4] https://medium.com/@GemmaBlack/csrf-the-a-z-2b85d26438b</h3>
                </div>
            </header>
        </body>
        </html>