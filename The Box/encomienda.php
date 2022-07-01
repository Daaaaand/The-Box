<link rel="stylesheet" href="style/style.css">
<?php
session_start();

require_once("db/db.php");



if (isset($_SESSION['usuario'])) {
    switch ($_SESSION['usuario']) {
        case 'admin':
?>
            <!--Navegador-->
            <main class="contenedor">

                <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="views/home_view.php">
                            <img src="fotos/logo.png" alt="Logo" width="60">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="views/home_view.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="personas.php">Usuarios</a></li>
                                <li class="nav-item float-righ"><a class="nav-link" href="encomienda.php">Encomienda</a></li>
                                <li class="nav-item"><a class="nav-link" href="cerrar_sesion.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </main>
            <!--Navegador-->
        <?php
            break;
        case 'recepcionista':
        ?>
            <!--Navegador-->
            <main class="contenedor">

                <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="views/home_view.php">
                            <img src="fotos/logo.png" alt="Logo" width="60">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="views/home_view.php">Home</a></li>
                                <li class="nav-item float-righ"><a class="nav-link" href="encomienda.php">Encomienda</a></li>
                                <li class="nav-item"><a class="nav-link" href="cerrar_sesion.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </main>
            <!--Navegador-->
<?php

            break;

        default:
    }
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Rellena todos los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="javascript:volver();"></button>
                </div>

                <script>
                    function volver() {
                        location.href = "encomienda.php"
                    }
                </script>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registrado!</strong> Se agregaron los datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="javascript:volver();"></button>
                </div>

                <script>
                    function volver() {
                        location.href = "encomienda.php"
                    }
                </script>
            <?php
            }
            ?>



            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Vuelve a intentar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="javascript:volver();"></button>
                </div>

                <script>
                    function volver() {
                        location.href = "encomienda.php"
                    }
                </script>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'despachado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Cambiado!</strong> Estado ha pasado a ser Despachado.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="javascript:volver();"></button>
                </div>

                <script>
                    function volver() {
                        location.href = "encomienda.php"
                    }
                </script>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Cambiado!</strong> Los datos fueron actualizados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="javascript:volver();"></button>
                </div>

                <script>
                    function volver() {
                        location.href = "encomienda.php"
                    }
                </script>
            <?php
            }
            ?>


            <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Eliminado!</strong> Los datos fueron borrados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="javascript:volver();"></button>
                </div>

                <script>
                    function volver() {
                        location.href = "encomienda.php"
                    }
                </script>
            <?php
            }
            ?>

            <!-- fin alerta -->
        </div>
    </div>
</div>
<?php

require_once("controllers/encomienda_controller.php");
