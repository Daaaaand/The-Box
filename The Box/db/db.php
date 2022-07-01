<?php
class Conectar
{

	//Declarar propiedades o métodos de clases como estáticos 
	//los hacen accesibles sin la necesidad de instanciar la clase.
	public static function conexion()
	{
		$conexion = new mysqli("localhost", "root", "admin", "Parcial");
		//Soluciona problemas con caracteres
		$conexion->query("SET NAMES 'utf8'"); // IMPORTANTE
		//Devuelve la conexion
		return $conexion;

		if ($conexion->connect_errno) {
			echo "ERROR al conectar con la DB.";
			exit;
		}
	}
}
