<?php
class personas_model
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
	public function getPersonas()
	{

		$sql = "SELECT * FROM persona where EstadoPersona = '1'";
		$consulta = $this->db->query($sql);

		while ($filas = $consulta->fetch_assoc()) {
			//Asignamos al atributo personas el resultado de la consulta
			$this->personas[] = $filas;
		}
		//El método devuelve el array resultante
		return $this->personas;
	}

	//Declaramos un metodo para crear nuevos registros en la tabla
	public function insertPersonas($ci, $nombre, $apellido, $cel, $direccion)
	{

		$sql = "INSERT INTO persona(ci, nombre, apellido, cel, direccion, EstadoPersona) VALUE ('$ci', '$nombre', '$apellido', '$cel', '$direccion', '1')";
		if ($this->db->query($sql)) {
			echo "<script>window.location.replace('personas.php?mensaje=registrado');</script>";
		} else {
			echo "<script>window.location.replace('personas.php?mensaje=error');</script>";
		}
	}

	//Declaramos un metodo para eliminar registros en la tabla
	public function deletePersonas($ci)
	{

		$sql = " UPDATE persona SET EstadoPersona = '0' where ci = '$ci'";
		if ($this->db->query($sql)) {
			echo "<script>window.location.replace('personas.php?mensaje=eliminado');</script>";
		} else {
			echo "<script>window.location.replace('personas.php?mensaje=error');</script>";
		}
	}

	//Declaramos un metodo para modificar registros en la tabla
	public function updatePersonas($ci, $nombre, $apellido, $celular, $direccion)
	{
		$sql = "UPDATE persona SET nombre = '$nombre', apellido = '$apellido', cel = '$celular', direccion = '$direccion' WHERE ci = $ci";
		if ($this->db->query($sql)) {
			echo "<script>window.location.replace('personas.php?mensaje=editado');</script>";
		} else {
			echo "<script>window.location.replace('personas.php?mensaje=error');</script>";
		}
	}
}
