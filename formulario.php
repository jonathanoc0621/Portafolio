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
    <link rel="stylesheet" href="css/resolucion.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="icon/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript">
        window.onload = function() {
            (function(d, script) {
                script = d.createElement('script');
                script.type = 'text/javascript';
                script.async = true;
                script.src = 'https://w.app/widget-v1/BOic9F.js';
                d.getElementsByTagName('head')[0].appendChild(script);
            }(document));
        };
    </script>
</head>

<body>
    <!--navegation-->
    <header class="header">
        <nav class="navbar navbar-expand-lg" style="background-color: #56e6dd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"></a>
                <img src="img/logo.png" alt="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html"><b>PERFIL</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="formulario.php"><b>FORMULARIO</b></a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link  active dropdown-toggle" href="actividades.html" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <b>ESTUDIO</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="actividades.html"><b>ESTUDIOS</b></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://oferta.senasofiaplus.edu.co/sofia-oferta/"
                                        target="_blank">SENA</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.udemy.com" target="_blank">UDEMY</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.netacad.com" target="_blank">CISCO</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://github.com/jonathanoc0621/Portafolio"
                                target="_blank"><b>REPOSITORIO</b></a>
                        </li>
                    </ul>
                    <div>
                        <a href="https://web.facebook.com" style="text-decoration: transparent;" target="_blank">
                            <samp class="icon-facebook" style="font-size: 40px;" ;></samp>
                        </a>
                        <a href="https://www.instagram.com" style="text-decoration: transparent;" target="_blank">
                            <samp class="icon-instagram" style="font-size: 40px;"></samp>
                        </a>
                        <a href="https://twitter.com/X" style="text-decoration: transparent;" target="_blank">
                            <samp class="icon-x" style="font-size: 40px;"></samp>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <br> <br>
    <!--Formulario-->
    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">
            <div class="mb-4 d-flex justify-content-start align-items-center">
                <h4><i class="bi bi-chat-left-quote"></i> &nbsp; Registro</h4>
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
            if (isset($_POST['btn2'])) {
                include("conexion.php");
                $nombre = ($_POST['nombre']);
                $resultado = mysqli_query($conexion, "SELECT * FROM $tabla_db1 ");
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
                    <td> " . $consulta['nombre'] . "</td>
                    <td> " . $consulta['apellido'] . "</td>
                    <td> " . $consulta['correo'] . "</td>
                    <td> " . $consulta['telefono'] . "</td>
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
    <div class="social">
        <a href="https://github.com/jonathanoc0621?tab=repositories"><img src="img/githut.png" alt="github"></a>
        <a href="https://www.linkedin.com/feed/"><img src="img/linkedind.png" alt="linkedin"></a>
        <a href="https://twitter.com/CortesTatan"><img src="img/twiter.png" alt="twitter"></a>
    </div>
    <!--footer-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="index.html">
                        <img src="img/descarga.png" alt="Logo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p style="font-size: 18px;"><samp class="icon-pinboard1"><b>DESAROLLO DE PAGINAS WEB</b></samp></p>
                <p style="font-size: 18px;"><samp class="icon-pinboard1"></samp><b>TODO LO RELACIONADO CON SISTEMAS OPERATIVOS Y SOTFWARE</b></samp></p>
            </div>
            <div class="box">
                <h2>Contactame</h2>
                <div class="red-social">
                    <p href="https://api.whatsapp.com/send?phone=+573115634497&text=Bienvenido+a+mi+chat+en+que+te+puedo+ayudar😀" style="font-size: 18px;"><samp class="icon-whatsapp"><b> CEL: 3115634497</b></samp></p>
                    <p href="https://www.google.com/maps/place/Funza,+Cundinamarca/@4.7151983,-74.228414,14z/data=!3m1!4b1!4m6!3m5!1s0x8e3f82a935a650d5:0x7bcbcfe2307bb094!8m2!3d4.7176677!4d-74.2118741!16s%2Fm%2F02qnknv?hl=es&entry=ttu" style="font-size: 18px;"><samp class="icon-zingat"><b> FUNZA - CUNDINAMARCA</b></samp></p>
                    <p href="mailto:jonathan0621_hotmail.com" style="font-size: 18px;"><samp class="icon-microsoftoutlook"><b> jonathan0621@_hotmail.com</b></samp></p>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2021 - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>