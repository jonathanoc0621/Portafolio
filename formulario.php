<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/icon1.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecno Net</title>
    <!--<link rel="stylesheet" href="css/reset.css">-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/resolucion.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="icon/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!--navegacion-->
    <header class="header">
        <nav class="navbar navbar-expand-lg" style="background-image: url(../img/geometric.png);">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo 3.png" alt="logo" style="width: 180px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html"
                                style="color: white;"><b style="font-family: 'Permanent Marker', cursive;">INICIO</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="formulario.php" style="color: white;"><b style="font-family: 'Permanent Marker', cursive;">REGISTRATE</b></a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link  active dropdown-toggle" href="actividades.html" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                <b style="font-family: 'Permanent Marker', cursive;">MANTENIMIENTO</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="actividades.html"><b style="font-family: 'Permanent Marker', cursive;">SOTFWARE</b></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://oferta.senasofiaplus.edu.co/sofia-oferta/"
                                        target="_blank" style="font-family: 'Permanent Marker', cursive;">COMPONENTES PC</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.udemy.com" target="_blank" style="font-family: 'Permanent Marker', cursive;">INSTALACION DE
                                        SOTFWARE</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.netacad.com" target="_blank" style="font-family: 'Permanent Marker', cursive;">HARDWARE</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.youtube.com/watch?v=Q2imkhmhOFo"
                                target="_blank" style="color: white;"><b style="font-family: 'Permanent Marker', cursive;">DISEÑO WEB</b></a>
                        </li>
                    </ul>
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
                <h4><i class="bi bi-chat-left-quote"></i> &nbsp;<b style="font-family: 'Permanent Marker', cursive;" >REGISTRATE</b></h4>
            </div>
            <div class="mb-1">
                <form method="post" action="formulario.php">
                    <div class="mb-4 d-flex justify-content-between">
                        <div>
                            <label for="nombre" style="font-family: 'Permanent Marker', cursive;"> <i class="bi bi-person-fill"></i> Nombre(Consulta)</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="ej: David">
                            <div class="nombre text-danger "></div>
                        </div>
                        <div>
                            <label for="apellido" style="font-family: 'Permanent Marker', cursive;"> <i class="bi bi-person-bounding-box"></i> Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="ej: Rodriguez">
                            <div class="apellido text-danger"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="correo" style="font-family: 'Permanent Marker', cursive;"><i class="bi bi-envelope-fill"></i> Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="ej:Email">
                        <div class="correo text-danger"></div>
                    </div>
                    <div class="mb-4">
                        <label for="Telefono" style="font-family: 'Permanent Marker', cursive;"><i class="bi bi-envelope-fill"></i>Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="ej:123">
                        <div class="correo text-danger"></div>
                    </div>
                    <div class="mb-2">
                        <input type="submit" value="ENVIAR" class="btn btn-success" name="btn1" style="font-family: 'Permanent Marker', cursive;">
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
                        <img src="img/logo 3.png" alt="Logo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOLUCIONES MODERNAS</h2>
                <p style="font-size: 18px;"><samp class="icon-pinboard1"><b>DESAROLLO DE PAGINAS WEB</b></samp></p>
                <p style="font-size: 18px;"><samp class="icon-pinboard1"></samp><b>TODO LO RELACIONADO CON SISTEMAS OPERATIVOS Y SOTFWARE</b></samp></p>
            </div>
            <div class="box">
                <h2>CONTACTAME</h2>
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
    <script src="wap.js"></script>
    <script src="alert.js"></script>
</body>

</html>