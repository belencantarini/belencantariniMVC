<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="./vistas/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Dra Belen Cantarini</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <img src="./vistas/imagenes/Logotipo_centro_de_estética_cuidado_mujer_rosa__1_-removebg-preview.png" alt="Logo" height="80" class="d-inline-block align-text-center">
                    <span class="h4 px-5 d-none d-md-inline">Medicina Estetica</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse show" id="navbarBasic">
                    <ul class="navbar-nav ms-auto mb-2 mb-xl-0 gap-1">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?ruta=inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?ruta=inicio#tratamientos">Los tratamientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php?ruta=inicio#sobremi">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link purple" aria-current="page" href="index.php?ruta=inicio#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="flex-grow-1">
        <?php
        if (isset($_GET["ruta"])) {
            if (
                $_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "login" ||
                $_GET["ruta"] == "editar_tratamientos" ||
                $_GET["ruta"] == "admin_tratamiento" ||
                $_GET["ruta"] == "nuevo_tratamiento" ||
                $_GET["ruta"] == "confirmar_tratamientos" ||
                $_GET["ruta"] == "salir" 
            ) {
                include "paginas/" . $_GET["ruta"] . ".php";
            } else {
                include "paginas/error404.php";
            }
        } else {
            include "paginas/inicio.php";
        }

        
        ?>
    </section>
    <footer>
        <nav class="navbar navbar-expand-lg navfooter">
            <div class="container-fluid d-flex justify-content-center justify-content-md-between px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <p class="h4 px-3">Dra Belen Cantarini - Medicina Estetica</p>
                </a>
                <div class="d-flex">
                    <ul class="mediaicons d-flex nav justify-content-center">  
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i><p class="d-none">Facebook</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-1x" aria-hidden="true"></i><p class="d-none">Instagram</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-1x" aria-hidden="true"></i><p class="d-none">Twitter</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i><p class="d-none">LinkedIn</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="mailto:belencantarini@gmail.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><p class="d-none">Gmail</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://api.whatsapp.com/send?phone=5491155086946&text=Hola!%20Vi%20tu%20sitio%20web%20sobre%20métodos%20de%20estudio%20y%20quisiera%20saber%20más!" target="_blank"><i class="fab fa-whatsapp fa-1x" aria-hidden="true"></i><p class="d-none">WhatsApp</p></a></li>
                    </ul>          
                </div>
            </div>
        </nav>
    </footer>
    </body>
</html>
