<?php

//Llamada al modelo
require_once("models/encomienda_model.php");

//Para Invocar
$persona = new encomienda_model();
//Datos de GetPersona de clase Encomienda_model
$datos = $persona->getPersonas();
$pendientes = $persona->getPendientes();

//Llamada a vista
require_once("views/encomienda_view.php");


//      Alta: Encomienda
if (isset($_POST['guardarEncomienda'])) {
    $IDE = $_POST['IDE'];
    $tipo = $_POST['tipo'];
    $observaciones = $_POST['observaciones'];
    $estado = $_POST['estado'];
    $origenSucursal = $_POST['origenSucursal'];
    $destinoSucursal = $_POST['destinoSucursal'];
    $persona->insertEncomienda($IDE, $tipo, $observaciones, $estado, $origenSucursal, $destinoSucursal);
    //echo "<script>window.location.replace('personas.php');</script>";
}


//      Alta: Sucursal
if (isset($_POST['guardarSucursal'])) {
    $IDS = $_POST['IDS'];
    $localidad = $_POST['localidad'];
    $ciudad = $_POST['ciudad'];
    $direccionSucursal = $_POST['direccionSucursal'];
    $persona->insertSucursal($IDS, $localidad, $ciudad, $direccionSucursal);
}


//      Baja: Encomienda
if (isset($_POST['eliminar'])) {
    $IDE = $_POST['IDE'];
    $persona->deleteEncomienda($IDE);
}


//      Despachar una: Encomienda
if (isset($_POST['despachar'])) {
    $IDE = $_POST['IDE'];
    $persona->despacharEncomienda($IDE);
}

//      Buscar: Encomienda
if (isset($_POST['buscar'])) {
    $IDE = $_POST['IDE'];
    $persona->buscarEncomienda($IDE);
}
