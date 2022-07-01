<?php

//Llamada al modelo
require_once("models/cliente_model.php");

//Para Invocar
$persona = new cliente_model();
//Datos de GetPersona de clase Encomienda_model
$datos = $persona->getPersonas($_POST['ci']);
require_once("views/cliente_view.php");


//Llamada a vista
if (isset($_POST['buscar'])) {
    $ci = $_POST['ci'];
    $persona->getPersonas($ci);
}
