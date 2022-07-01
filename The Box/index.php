<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="Login__padre">
        <div class="Login">
            <div class="Login__Usuario">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <h1 class="titulo__login">Login</h1>
                    <p class="p__Login">Usuario:</p>
                    <input type="text" name="usuario">
                    <p class="p__Login">Clave:</p>
                    <input type="password" name="contraseña">
                    <input type="submit" name="login" class="btn" value="Ingresar">
                </form>
            </div>
            <div class="Login__Cliente">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <h1 class="titulo__login">Soy Cliente</h1>
                    <p class="p__Login">Ci:</p>
                    <input type="text" name="ci">
                    <input type="submit" name="login_cliente" class="btn" value="Ingresar">
                </form>
            </div>
        </div>
    </div>

    <?php

    // 1. Conexion con el servidor y la base de datos
    $conexion = new mysqli('localhost', 'root', 'admin', 'Parcial');
    if ($conexion->connect_errno) {
        echo "ERROR al conectar con la DB.";
        exit;
    }
    // 2. isset() del boton login
    if (isset($_POST['login'])) {

        // 3. Variables para FORM
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        // 3. Variables para SESSION
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contraseña'] = $contraseña;

        if ($usuario == "" || $_POST['contraseña'] == null) { // Validamos que ningún campo quede vacío
            echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
        } else {
            // 4. Cadena de SQL
            $sql = "SELECT * FROM Administrador WHERE usuarioAdmin = '$usuario' AND contraseñaAdmin = '$contraseña'";
            // 5. Ejecuto cadena query()
            if (!$consulta = $conexion->query($sql)) {
                echo "ERROR: no se pudo ejecutar la consulta!";
            } else {

                // 6. Cuento registros obtenidos del select. 
                // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
                $filas = mysqli_num_rows($consulta);

                // 7. Comparo cantidad de registros encontrados
                if ($filas == 0) {
                    echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
                    session_id('admin');
                } else {
                    header('location: views/home_view.php'); // Si está todo correcto redirigimos a otra página
                }
            }
        }
    }

    if (isset($_POST['login'])) {

        // 3. Variables para FORM
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        // 3. Variables para SESSION
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contraseña'] = $contraseña;

        if ($usuario == "" || $_POST['contraseña'] == null) { // Validamos que ningún campo quede vacío
            echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
        } else {
            // 4. Cadena de SQL
            $sql = "SELECT * FROM Recepcionista WHERE usuarioRecepcionista = '$usuario' AND contraseñaRecepcionista = '$contraseña'";

            // 5. Ejecuto cadena query()
            if (!$consulta = $conexion->query($sql)) {
                echo "ERROR: no se pudo ejecutar la consulta!";
            } else {

                // 6. Cuento registros obtenidos del select. 
                // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
                $filas = mysqli_num_rows($consulta);

                // 7. Comparo cantidad de registros encontrados
                if ($filas == 0) {
                    echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
                    session_id('admin');
                } else {
                    header('location: views/home_view.php'); // Si está todo correcto redirigimos a otra página
                }
            }
        }
    }

    if (isset($_POST['login_cliente'])) {
        $ci = $_POST['ci'];
        if ($ci == "") { // Validamos que ningún campo quede vacío
            echo "<script>alert('Error: CI Vacia!!');</script>"; // Se utiliza Javascript dentro de PHP
        } else {
            header('location: cliente.php'); // Si está todo correcto redirigimos a otra página
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>