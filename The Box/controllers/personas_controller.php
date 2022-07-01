<?php

//Llamada al modelo
require_once("models/personas_model.php");

//Creamos un objeto de la clase personas_model
$persona = new personas_model();
//Mediante el objeto invocamos al metodo getPersonas y guardamos
//el resultado dentro de $datos
$datos = $persona->getPersonas();

//Llamada a la vista
require_once("views/personas_view.php");


//PERSONAS

if (isset($_POST['guardar'])) {
	$ci = $_POST['ci'];
	$nombre = $_POST['nom'];
	$apellido = $_POST['apellido'];
	$cel = $_POST['cel'];
	$direccion = $_POST['direccion'];
	$persona->insertPersonas($ci, $nombre, $apellido, $cel, $direccion);
	//echo "<script>window.location.replace('personas.php');</script>";
}

if (isset($_POST['eliminar'])) {
	$ci = $_POST['ci'];
	$persona->deletePersonas($ci);
	//echo "<script>window.location.replace('personas.php');</script>";
}

if (isset($_POST['modificar'])) {
	$ci = $_POST['ci'];
	$nombre = $_POST['nom'];
	$apellido = $_POST['apellido'];
	$cel = $_POST['cel'];
	$direccion = $_POST['direccion'];
	$persona->updatePersonas($ci, $nombre, $apellido, $cel, $direccion);
	//echo "<script>window.location.replace('personas.php');</script>";
}
