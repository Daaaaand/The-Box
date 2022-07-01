<?php
session_start()
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Box</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <?php
    if (isset($_SESSION['usuario'])) {
        switch ($_SESSION['usuario']) {
            case 'admin':
    ?>
                <!--Navegador-->
                <main class="contenedor">

                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="home_view.php">
                                <img src="../fotos/logo.png" alt="Logo" width="60">
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="home_view.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../personas.php">Usuarios</a></li>
                                    <li class="nav-item float-righ"><a class="nav-link" href="../encomienda.php">Encomienda</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../cerrar_sesion.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </main>
                <!--Navegador-->
                <!--Body-->
                <main class="main__cliente">
                    <div class="content">
                        <div class="visible">
                            TE LLEGA<ul class="ul__animacion">
                                <li class="li__tricking"> RAPIDO </li>
                                <li class="li__parkour"> SEGURO </li>
                            </ul>
                        </div>
                    </div>
                </main>
                <!--CAROUSEL-->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="../fotos/cajas.jpg" class="d-block w-100 img" alt="cajas">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../fotos/camiones.jpg" class="d-block w-100 img" alt="camiones">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../fotos/brad.jpg" class="d-block w-100 img" alt="Brad Pitt">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- CAROUSEL-->

            <?php
                break;
            case 'recepcionista':
            ?>
                <!--Navegador-->
                <main class="contenedor">

                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="home_view.php">
                                <img src="../fotos/logo.png" alt="Logo" width="60">
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="home_view.php">Home</a></li>
                                    <li class="nav-item float-righ"><a class="nav-link" href="../encomienda.php">Encomienda</a></li>
                                    <li class="nav-item"><a class="nav-link" href="../cerrar_sesion.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </main>
                <!--Navegador-->
                <!--Body-->
                <main class="main__cliente">
                    <div class="content">
                        <div class="visible">
                            TE LLEGA<ul class="ul__animacion">
                                <li class="li__tricking"> RAPIDO </li>
                                <li class="li__parkour"> SEGURO </li>
                            </ul>
                        </div>
                    </div>
                </main>
                <!--CAROUSEL-->
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="../fotos/cajas.jpg" class="d-block w-100 img" alt="cajas">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../fotos/camiones.jpg" class="d-block w-100 img" alt="camiones">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../fotos/brad.jpg" class="d-block w-100 img" alt="Brad Pitt">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- CAROUSEL-->
    <?php

                break;

            default:
        }
    }
    ?>
    <footer>

        <p class="p__footer">Todos los derechos Reservados - 2022</p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>