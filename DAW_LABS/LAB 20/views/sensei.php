<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Lab 20 - Desarrollo de Aplicaciones Web</title>
    <!-- LAB 20 CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body id="root" class="black">
    <main>
        <!-- Start Nav -->
            <div class="navbar-fixed"> 
                            <nav>
                                <div class="nav-wrapper yellow accent-2">
                                    <a href="../index.php" class="brand-logo black-text" style="font-family:cobra;font-size:5vw">
                                        Cobra Kai
                                    </a>
                                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                                    <ul class="right hide-on-med-and-down">
                                        <li><a class="black-text" href="../index.php"><i class="material-icons black-text">home</i></a></li>
                                        <li><a class="black-text" href="alumnos.php"><i class="material-icons black-text">people</i></a></li>
                                        <li><a class="black-text" href="sensei.php"><i class="material-icons black-text">account_box</i></a></li>
                                        <li>
                                            <a class="waves-effect waves-light btn black yellow-text" href="https://github.com/irvingpercam/daw/tree/master/DAW_LABS/LAB%2023">
                                                Salir <i class="material-icons right">close</i>
                                            </a>
                                        </li>
                                    </ul>
                                    </div>
                                </nav>
                            </div>
                                <ul class="sidenav yellow accent-2" id="mobile-demo">
                                    <li><a class="black-text" href="../index.php"><i class="material-icons black-text">home</i>Inicio</a></li>
                                    <li><a class="black-text" href="alumnos.php"><i class="material-icons black-text">people</i>Alumnos</a></li>
                                    <li><a class="black-text" href="sensei.php"><i class="material-icons black-text">account_box</i>Sensei</a></li>
                                    <li>
                                        <a class="waves-effect waves-light btn black yellow-text" href="https://github.com/irvingpercam/daw/tree/master/DAW_LABS/LAB%2023">
                                            Salir <i class="material-icons right yellow-text">close</i>
                                        </a>
                                    </li>
                                </ul>
        <!-- End Nav -->
        <!-- Start Sensei Info Card -->
            <div class="container center">
                <div class="row">
                        <div class="col s12 m4 l2">
                                <!-- <h4 class="yellow-text" style="font-family:cobra;font-size:3vw">Cobra Kai Dojo Reseda</h4> -->
                            </div>
                        <div class="col s12 m4 l8">
                            <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="https://i2.wp.com/codigoespagueti.com/wp-content/uploads/2018/04/cobra-kai.png?resize=1080%2C600&quality=90&ssl=1">
                                        </div>
                                    <div class="card-content yellow accent-2">
                                            <span class="card-title activator grey-text text-darken-4" style="font-family:cobra;font-size:6vw;">Sensei<i class="material-icons right">more_vert</i></span>
                                            <p><a class="purple-text" href="https://thekaratekid.fandom.com/wiki/Johnny_Lawrence" target="_blank" style="font-family:cobra;font-size:3vw;">Ver mas</a></p>
                                        </div>
                                    <div class="card-reveal yellow accent-2">
                                            <span class="card-title grey-text text-darken-4">Karate Kid Wiki<i class="material-icons right">close</i></span>
                                            <p>John Lawrence, commonly referred as Johnny, is the secondary antagonist of the original Karate Kid and one of the main protagonists of the Cobra Kai web series. He was the top student and later ex sensei of the Cobra Kai Dojo. </p>
                                        </div>
                                </div>
                                <h4 class="yellow-text" style="font-family:cobra;font-size:10vw">Sensei<br>Johnny Lawrence</h4>
                                <h4 class="yellow-text" style="font-family:cobra;font-size:6vw">Cobra Kai Never Dies</h4>
                                <br><br>
                            </div>
                        <div class="col s12 m4 l2">
                            </div>
                    </div>
                </div>
        <!-- End Sensei Info Card -->
        <!-- Start Footer -->
            <footer class="page-footer yellow accent-2" style="position:fixed;bottom:0;left:0;width:100%;">
                        <div class="footer-copyright">
                            <div class="container black-text" style="font-family:Arial;font-size:1,5vw;">
                                ©Copyright <a class="indigo-text text-lighten-3" href="http://github.com/irvingpercam">Irving Aguilar</a>
                                - Powered by Tecnológico de Monterrey.
                            </div>
                        </div>
                    </footer>
        <!-- End Footer -->
        <!-- Start Scripts -->
            <!-- jQuery -->
                <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
                <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="../js/table.js"></script>
                <script type="text/javascript" src="../js/main.js"></script>
                <script type="text/javascript" src="../js/app.js"></script>
            <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- End Scripts -->
        </main>
</body>
</html>