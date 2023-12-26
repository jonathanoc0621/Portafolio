<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/Portafolio.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <!--<link rel="stylesheet" href="css/reset.css">-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!--navegation-->
    <header class="header">
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="index.html"></a>
                <img src="img/logo.png" alt="logo portafolio" height="60px">
            </div>
            <nav class="header-menu">
                <ul class="header-menu-wrapper">
                    <li class="header-menu-item">
                        <a href="index.html" class="header-menu-link">Inicio</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="formulario.php" class="header-menu-link">Formulario</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="actividades.html" class="header-menu-link">Estudios</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="https://github.com/jonathanoc0621/Portafolio" class="header-menu-link" target="_blank">Repositorio</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <br>
    <!--Formulario-->
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">
            <div class="mb-4 d-flex justify-content-start align-items-center">
                <h4> <i class="bi bi-chat-left-quote"></i> &nbsp; Registro</h4>
            </div>
            <div class="mb-1">
                <form method="post" action="formulario.php">
                    <div class="mb-4 d-flex justify-content-between">
                        <div>
                            <label for="nombre"> <i class="bi bi-person-fill"></i> Nombre(Consulta)</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="ej: Gabriel">
                            <div class="nombre text-danger "></div>
                        </div>
                        <div>
                            <label for="apellido"> <i class="bi bi-person-bounding-box"></i> Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="ej: Pacheco">
                            <div class="apellido text-danger"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="correo"><i class="bi bi-envelope-fill"></i> Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="ej:Email">
                        <div class="correo text-danger"></div>
                    </div>
                    <div class="mb-4">
                        <label for="Telefono"><i class="bi bi-envelope-fill"></i>Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="ej:123">
                        <div class="correo text-danger"></div>
                    </div>
                    <div class="mb-2">
                        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
                        <input type="submit" value="consultar" class="btn btn-primary" name="btn2">
                    </div>
                </form>
                <?php
                include("registro.php");
                ?>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">
            <div class="mb-4 d-flex justify-content-start align-items-center">
                <h4> <i class="bi bi-chat-left-quote"></i> &nbsp; Consulta </h4>
            </div>
            <?php
            if (isset($_POST['btn2'])) 
            {
                include("conexion.php");
                $nombre = trim($_POST['nombre']);

                $resultado = mysqli_query($conexion, "SELECT * FROM $tabla_db1");
                while ($consulta = mysqli_fetch_array($resultado)) {
                    echo "
            <table widith=\"100\"boder=\"1\">
                <tr>
                    <td><b>
                            <center>Nombre</center>
                        </b></td>
                    <td><b>
                            <center>Apellido</center>
                        </b></td>
                    <td><b>
                            <center>Correo</center>
                        </b></td>
                    <td><b>
                            <center>Telefono</center>
                        </b></td>
                </tr>
                <tr>
                    <td> " . $consulta['Nombre'] . "</td>
                    <td> " . $consulta['Apellido'] . "</td>
                    <td> " . $consulta['Correo'] . "</td>
                    <td> " . $consulta['Telefono'] . "</td>
                </tr>
            </table>
            ";
                }

                include("cerrar_conexion.php");
            }
            ?>
        </div>
    </section>
    <br><br>
    <!--social-->
    <div class="social" >
        <a href="https://github.com/jonathanoc0621?tab=repositories"><img src="img/githut.png" alt="github"></a>
        <a href="https://www.linkedin.com/feed/"><img src="img/linkedind.png" alt="linkedin"></a>
        <a href="https://twitter.com/CortesTatan"><img src="img/twiter.png" alt="twitter"></a>
    </div>
    <!--footer-->
    <section>
        <footer>
            <div class="img-logo-portafolio">
                <img src="img/descarga.png" alt="Logo Footer" width="150px" height="114px">
            </div>
            <div class="info">
                <h3>
                    GRACIAS POR VISITAR MI PAGINA
                </h3>
            </div>
        </footer>
    </section>
    <div class="footer">
        <h2>
            © Copyright
        </h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>