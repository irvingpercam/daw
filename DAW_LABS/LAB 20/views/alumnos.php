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
        <!-- Start Table -->
            <div class="container yellow accent-2">
                    <p class="caption black-text center" style="font-family:cobra;font-size:2vw;">Team Cobra Kai</p>
                    <hr>
                    <br>
                    <div class="table-responsive" style="overflow-x:scroll;overflow-y:hidden;height:auto;">
                        <table id="student_table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Nombre</td>
                                        <td>Apellido</td>
                                        <td>Fecha de Ingreso</td>
                                        <td>Grado</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                </div>
        <!-- End Table -->
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