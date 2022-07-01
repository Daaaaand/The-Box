<?php
class cliente_model
{

	//Declaramos atributos privados
	private $db;
	private $personas;

	//Declaramos un constructor que sirve para incializar los atributos
	public function __construct()
	{
		//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
		//Conectar es la clase y conexion es el metodo
		$this->db = Conectar::conexion();
		//Determinamos que el atributo personas será un array
		$this->personas = array();
	}

	//Declaramos un metodo para obtener todos los registros de personas
	public function getPersonas($ci)
	{

		$sql = "SELECT Encomienda.IDE, Encomienda.tipo, Encomienda.estado, Encomienda.origenSucursal, Encomienda.destinoSucursal from Historial 
		right join Encomienda on Historial.IDE = Encomienda.IDE
		where Historial.ci = '$ci';";
		$consulta = $this->db->query($sql);

		while ($filas = $consulta->fetch_assoc()) {
			//Asignamos al atributo personas el resultado de la consulta
			$this->personas[] = $filas;
		}
		//El método devuelve el array resultante
		return $this->personas;

		if ($this->db->query($sql)) {
			echo "<script>window.location.replace('cliente.php');</script>";
		} else {
			echo "<script>window.location.replace('cliente.php');</script>";
		}
	}
}
