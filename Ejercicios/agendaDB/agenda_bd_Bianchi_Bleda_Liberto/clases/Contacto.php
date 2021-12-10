<?php 
include_once "Conexion.php";
class Contacto extends Conexion{
    public $nombre;
    public $numero;

public function create(){
 $this->conectar();
    $pre = mysqli_prepare($this->conexion, "INSERT INTO contactos(nombre,numero) VALUES (?,?)");
    $pre->bind_param("ss",$this->nombre,$this->numero);
    $pre->execute();
}

public static function read(){
    $conexion = new Conexion();
    $conexion->conectar();
    $pre = mysqli_prepare($conexion->conexion, "SELECT * FROM contactos");
    $pre->execute();
    $res = $pre->get_result();
    $contactos = [];
    while($contacto = $res->fetch_object(Contacto::class))
    array_push($contactos,$contacto);

    return $contactos;
}

public function update(){
    $this->conectar();
    $pre = mysqli_prepare($this->conexion, "UPDATE contactos SET numero = ? WHERE nombre = ?");
    $pre->bind_param("ss",$this->numero,$this->nombre);
    $pre->execute();
}

public function delete(){
    $this->conectar();
    $pre = mysqli_prepare($this->conexion, "DELETE FROM contactos WHERE nombre = ?");
    $pre->bind_param("s",$this->nombre);
    $pre->execute();
}

public static function getByName($nombre){
    $conexion = new Conexion();
    $conexion->conectar();
    $pre = mysqli_prepare($conexion->conexion,"SELECT * FROM contactos WHERE nombre = ?");
    $pre->bind_param("s",$nombre);
    $pre->execute();
    $res = $pre->get_result();

    return $res->fetch_object(Contacto::class);
}

}


?>