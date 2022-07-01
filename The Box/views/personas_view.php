<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="Form__Personas--center">
        <div class="Form__padre">

            <div class="alta__persona">
                <h1 class="h1__personas">Alta</h1>
                <form method="post" action="">
                    <input class="son1" type="text" name="ci" placeholder="Ci" />
                    <input class="son1" type="text" name="nom" placeholder="Nombre" />
                    <input class="son1" type="text" name="apellido" placeholder="Apellido" />
                    <input class="son1" type="text" name="cel" placeholder="Celular" />
                    <input class="son1" type="text" name="direccion" placeholder="Direccion" />
                    <input class="son1" type="submit" name="guardar" value="Guardar" />
                </form>
            </div>
            <br>
            <div class="baja__persona">
                <h1 class="h1__personas">Baja</h1>
                <form method="post" action="">
                    <input class="son1 type=" text" name="ci" placeholder="Ci de usuario a eliminar" />
                    <input type="submit" name="eliminar" value="Borrar" />
                </form>
            </div>
            <br>
            <div class="modificaciones__persona">
                <h1 class="h1__personas">Modificar</h1>
                <form method="post" action="">
                    <input class="son1" type="text" name="ci" placeholder="Ci a modificar: " />
                    <input class="son1" type="text" name="nom" placeholder="Nuevo nombre" />
                    <input class="son1" type="text" name="apellido" placeholder="Nuevo Apellido" />
                    <input class="son1" type="text" name="cel" placeholder="nuevo Celular" />
                    <input class="son1" type="text" name="direccion" placeholder="Nuevo Direccion" />
                    <input class="son1" type="submit" name="modificar" value="Modificar" />
                </form>
            </div>
        </div>
    </div>

    <br>
    <table border="1" width="300" class="tabla__cliente">
        <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cel</th>
            <th>Direccion</th>
        </tr>
        <?php
        //Recorremos el array para ir mostrando fila a fila los registros
        foreach ($datos as $dato) {
            echo "<tr>
            <td>" . $dato["ci"] . "</td>
            <td>" . $dato["nombre"] . "</td>
            <td>" . $dato["apellido"] . "</td>
            <td>" . $dato["cel"] . "</td>
            <td>" . $dato["direccion"] . "</td>
            </tr>";
        }
        ?>
    </table>
    <footer>

        <p class="p__footer">Todos los derechos Reservados - 2022</p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>