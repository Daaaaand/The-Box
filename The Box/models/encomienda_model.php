<?php
class encomienda_model
{

    //Declaramos atributos privados
    private $db;
    private $personas;
    private $pendiente;

    //Declaramos un constructor que sirve para incializar los atributos
    public function __construct()
    {
        //Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
        //Conectar es la clase y conexion es el metodo
        $this->db = Conectar::conexion();
        //Determinamos que el atributo personas será un array
        $this->personas = array();
        $this->pendiente = array();
    }

    //Declaramos un metodo para obtener todos los registros de personas
    public function getPersonas()
    {

        $sql = "SELECT * FROM Encomienda";
        $consulta = $this->db->query($sql);

        while ($filas = $consulta->fetch_assoc()) {
            //Asignamos al atributo personas el resultado de la consulta
            $this->personas[] = $filas;
        }
        //El método devuelve el array resultante
        return $this->personas;
    }

    public function getPendientes()
    {

        $sql = "SELECT * FROM Encomienda where estado = 'Pendiente'";
        $consultaPendiente = $this->db->query($sql);

        while ($filasPendientes = $consultaPendiente->fetch_assoc()) {
            //Asignamos al atributo personas el resultado de la consulta
            $this->pendiente[] = $filasPendientes;
        }
        //El método devuelve el array resultante
        return $this->pendiente;
    }

    //Declaramos un metodo para crear nuevos registros en la tabla
    public function insertEncomienda($IDE, $tipo, $observaciones, $estado, $origenSucursal, $destinoSucursal)
    {

        $sql = "INSERT INTO Encomienda(IDE, tipo, observaciones, estado, origenSucursal, destinoSucursal) VALUE ('$IDE', '$tipo', '$observaciones', '$estado', '$origenSucursal', $destinoSucursal)";
        if ($this->db->query($sql)) {
            echo "<script>window.location.replace('encomienda.php?mensaje=registrado');</script>";
        } else {
            echo "<script>window.location.replace('encomienda.php?mensaje=error');</script>";
        }
    }

    public function insertSucursal($IDS, $localidad, $ciudad, $direccionSucursal)
    {
        $sql = "INSERT INTO Sucursal(IDE, tipo, observaciones, estado, origenSucursal, destinoSucursal) VALUE ('$IDS', '$localidad', '$ciudad', '$direccionSucursal')";
        if ($this->db->query($sql)) {
            echo "<script>window.location.replace('encomienda.php?mensaje=registrado');</script>";
        } else {
            echo "<script>window.location.replace('encomienda.php?mensaje=error');</script>";
        }
    }

    //Declaramos un metodo para eliminar registros en la tabla
    public function deleteEncomienda($IDE)
    {

        $sql = "DELETE FROM Encomienda WHERE IDE = $IDE";
        if ($this->db->query($sql)) {
            echo "<script>window.location.replace('encomienda.php?mensaje=eliminado');</script>";
        } else {
            echo "<script>window.location.replace('encomienda.php?mensaje=error');</script>";
        }
    }

    public function despacharEncomienda($IDE)
    {

        $sql = "UPDATE Encomienda SET estado = 'Despachada' where IDE = '$IDE'";
        if ($this->db->query($sql)) {
            echo "<script>window.location.replace('encomienda.php?mensaje=despachado');</script>";
        } else {
            echo "<script>window.location.replace('encomienda.php?mensaje=error');</script>";
        }
    }

    //Declaramos un metodo para modificar registros en la tabla
    public function buscarEncomienda($IDE)
    {
        $sql = "SELECT * FROM Encomienda where IDE = $IDE";
        $consulta = $this->db->query($sql);

        if ($this->db->query($sql)) {
            echo "<script>window.location.replace('encomienda.php?mensaje=despachado');</script>";
        } else {
            echo "<script>window.location.replace('encomienda.php?mensaje=error');</script>";
        }
    }
}
