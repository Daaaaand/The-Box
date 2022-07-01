<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>



    <?php
    if (isset($_SESSION['usuario'])) {
        switch ($_SESSION['usuario']) {
            case 'admin':
    ?>
                <div class="padre__encomienda">
                    <div class="alta__encomienda">
                        <h1>Alta</h1>
                        <form method="post" action="">
                            <!-- Alta: Encomienda -->
                            <input type="text" name="IDE" placeholder="IDE" />
                            <input type="text" name="tipo" placeholder="tipo" />
                            <input type="text" name="estado" placeholder="estado" />
                            <input type="text" name="origenSucursal" placeholder="origen" />
                            <input type="text" name="destinoSucursal" placeholder="Destino" />
                            <textarea type="text" name="observaciones" placeholder="observaciones"></textarea>
                            <input type="submit" name="guardarEncomienda" value="Guardar" />
                        </form>
                    </div>
                    <div class="baja__encomienda">
                        <br> <!-- Eliminar / Despachar -->
                        <h1>Baja - Despacho</h1>
                        <form method="post" action="">
                            <input type="text" name="IDE" placeholder="ID de Encomienda" />
                            <input type="submit" name="eliminar" value="Borrar" />
                            <input type="submit" name="despachar" value="Despachar" />
                        </form>
                        <br>
                    </div>

                </div>


                <!--Tabla-->
                <table border="1" width="300" class="tabla__cliente">
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Observaciones</th>
                        <th>Estado</th>
                        <th>ID de Origen</th>
                        <th>ID de Destino</th>
                    </tr>

                    <?php

                    // DATOS
                    foreach ($datos as $dato) {
                        echo "<tr>
            <td>" . $dato["IDE"] . "</td>
            <td>" . $dato["tipo"] . "</td>
            <td>" . $dato["observaciones"] . "</td>
            <td>" . $dato["estado"] . "</td>
            <td>" . $dato["origenSucursal"] . "</td>
            <td>" . $dato["destinoSucursal"] . "</td>
            </tr>";
                    }
                    ?>
                </table>
                <footer>

                    <p class="p__footer">Todos los derechos Reservados - 2022</p>

                </footer>
            <?php
                break;
            case 'recepcionista':

            ?>
                <div class="padre__encomienda">
                    <div class="alta__encomienda">
                        <h1>Alta</h1>
                        <form method="post" action="">
                            <!-- Alta: Encomienda -->
                            <input type="text" name="IDE" placeholder="IDE" />
                            <input type="text" name="tipo" placeholder="tipo" />
                            <input type="text" name="estado" placeholder="estado" />
                            <input type="text" name="origenSucursal" placeholder="origen" />
                            <input type="text" name="destinoSucursal" placeholder="Destino" />
                            <textarea type="text" name="observaciones" placeholder="observaciones"></textarea>
                            <input type="submit" name="guardarEncomienda" value="Guardar" />
                        </form>
                    </div>
                    <div class="baja__encomienda">
                        <br> <!-- Eliminar / Despachar -->
                        <h1>Despacho</h1>
                        <form method="post" action="">
                            <input type="text" name="IDE" placeholder="ID de Encomienda" />
                            <input type="submit" name="despachar" value="Despachar" />
                        </form>
                        <br>
                    </div>

                </div>
                <!--Tabla-->
                <table border="1" width="300" class="tabla__cliente">
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Observaciones</th>
                        <th>Estado</th>
                        <th>ID de Origen</th>
                        <th>ID de Destino</th>
                    </tr>

                    <?php

                    // DATOS
                    foreach ($pendientes as $dato) {
                        echo "<tr>
            <td>" . $dato["IDE"] . "</td>
            <td>" . $dato["tipo"] . "</td>
            <td>" . $dato["observaciones"] . "</td>
            <td>" . $dato["estado"] . "</td>
            <td>" . $dato["origenSucursal"] . "</td>
            <td>" . $dato["destinoSucursal"] . "</td>
            </tr>";
                    }
                    ?>
                </table>
                <footer>

                    <p class="p__footer">Todos los derechos Reservados - 2022</p>

                </footer>
    <?php


                break;

            default:
        }
    }
    ?>

    <!--FIn BODY-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>